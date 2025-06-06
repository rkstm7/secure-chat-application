<?php
require_once('DB.php');
$db = DB::getInstance();
$message = "";
session_start();

// LOGOUT: Mark user offline and destroy session
if (isset($_SESSION['uid']) || isset($_SESSION['username'])) {
    $uid = $_SESSION['uid'];
    $query = "UPDATE users SET online=0, logout_timestamp=CURRENT_TIMESTAMP() WHERE id=$uid";
    if ($db->query($query) === true) {
        session_unset();
        session_destroy();
    }
}

// LOGIN Process
if (isset($_POST['login'])) {
    loginProcess($db);
    unset($_POST['login']);
}

// REGISTER Process
if (isset($_POST['register'])) {
    registerProcess($message, $db);
    unset($_POST['register']);
}

function loginProcess($db)
{
    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        if (strpos($username, "'") === false && strpos($password, "'") === false) {
            $password = specialEncryption($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) == 1) {
                echo "<div class='text-success' style='font-size: 16px; font-weight: bold; margin-top:20px; text-align:center;'>Logging In..&nbsp <i class='fas fa-lock'></i></div>";
                $_SESSION['uid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $uid = $_SESSION['uid'];
                $query = "UPDATE users SET online=1, last_timestamp=CURRENT_TIMESTAMP() WHERE id=$uid";
                if ($db->query($query) === true) {
                    $token = generateRandomToken($db);
                    $query = "SELECT * FROM login_details WHERE uid = $uid";
                    $result = mysqli_query($db, $query);
                    if (mysqli_num_rows($result) == 0) {
                        $query = "INSERT INTO login_details (uid, token) VALUES ($uid, '$token')";
                        if ($db->query($query) === true) {
                            header("refresh:1;url=./chat");
                        }
                    } else {
                        $query = "UPDATE login_details SET token='$token', last_timestamp = CURRENT_TIMESTAMP() WHERE uid=$uid";
                        if ($db->query($query) === true) {
                            header("refresh:1;url=./chat");
                        }
                    }
                }
            } else {
                echo "<div class='text-danger' style='font-size: 16px; font-weight: bold; margin-top:20px; text-align:center;'>Wrong Username or Password</div>";
            }
        }
    }
}

function registerProcess($message, $db)
{
    global $message;

    if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        
        if (strpos($username, "'") === false && strpos($password, "'") === false) {
            $password = specialEncryption($password);

            // Check if username already exists
            $query = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) > 0) {
                echo "<div class='text-danger' style='font-size: 16px; font-weight: bold; margin-top:20px; text-align:center;'>Please choose another username</div>";
                return;
            }

            // Find the minimum missing id from 1 to max(id)
            $missing_id = null;
            $result = mysqli_query($db, "SELECT id FROM users ORDER BY id ASC");
            $expected = 1;

            while ($row = mysqli_fetch_assoc($result)) {
                if ((int)$row['id'] != $expected) {
                    $missing_id = $expected;
                    break;
                }
                $expected++;
            }

            // Insert using missing ID or AUTO_INCREMENT
            if ($missing_id !== null) {
                $query = "INSERT INTO users (id, username, password) VALUES ($missing_id, '$username', '$password')";
            } else {
                $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            }

            if ($db->query($query) === true) {
                echo "<div class='text-success' style='font-size: 16px; font-weight: bold; margin-top:20px; text-align:center;'>Successfully Registered &nbsp <i class='fas fa-lock'></i></div>";
                header("refresh:2;url=./index.php");
            } else {
                echo "<div class='text-danger' style='font-size: 16px; font-weight: bold; margin-top:20px; text-align:center;'>" . mysqli_error($db) . "</div>";
            }
        }
    }
}

function generateRandomToken($db)
{
    while (true) {
        $length = 16;
        $word = array_merge(range('a', 'z'), range(0, 9), range('A', 'Z'));
        shuffle($word);
        $token = substr(implode($word), 0, $length);

        $query = "SELECT * FROM login_details WHERE token='$token'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 0) {
            break;
        }
    }
    return $token;
}

function specialEncryption($string)
{
    return md5($string);
}
?>
