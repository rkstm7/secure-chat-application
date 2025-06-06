<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4733528720.js" crossorigin="anonymous"></script>

  <title>Secured Chat App - Register</title>
  <link rel="stylesheet" type="text/css" href="resources/css/index.css">
  <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">

  <style>
    body {
      background: #0f0f0f;
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      height: 100vh;
      margin: 0;
      color: #fff;
    }

    .register-container {
      background: rgba(20, 20, 20, 0.8);
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
      width: 350px;
      position: relative;
      overflow: hidden;
    }

    h1 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: cyan;
      text-transform: uppercase;
    }

    .form-group {
      position: relative;
      margin-bottom: 20px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      background: transparent;
      color: white;
      border: 2px solid cyan;
      border-radius: 5px;
      outline: none;
      transition: 0.3s;
      font-size: 16px;
    }

    .form-control:focus {
      box-shadow: 0 0 10px cyan;
      border-color: #00fff7;
    }

    .btn-register {
      width: 100%;
      background: cyan;
      border: none;
      padding: 12px;
      font-size: 16px;
      font-weight: bold;
      border-radius: 5px;
      transition: 0.3s;
      cursor: pointer;
    }

    .btn-register:hover {
      background: #00a3a3;
      box-shadow: 0 0 10px #00fff7;
    }

    .login-link {
      color: cyan;
      text-decoration: none;
      display: block;
      margin-top: 15px;
    }

    .login-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h1>Register</h1>
    
    <form action="" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required name="username">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>

        <button type="submit" class="btn-register" name="register">Register</button>
    </form>

    <a href="index.php" class="login-link">Already have an account? Login</a>
  </div>

  <?php require_once 'server/server.php'; ?>
</body>
</html>

<script>
	if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>