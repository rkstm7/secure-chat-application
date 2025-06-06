<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4733528720.js" crossorigin="anonymous"></script>

  <title>Secured Chat App - Login</title>
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

    header {
      width: 100%;
      padding: 15px 0;
      background: rgba(20, 20, 20, 0.9);
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      color: cyan;
      box-shadow: 0 0 10px cyan;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1000;
    }

    .login-container {
      background: rgba(20, 20, 20, 0.8);
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
      width: 350px;
      position: relative;
      overflow: hidden;
      margin-top: 80px;
    }

    h1 {
      font-size: 1.5rem;
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

    .btn-login {
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

    .btn-login:hover {
      background: #00a3a3;
      box-shadow: 0 0 10px #00fff7;
    }

    .register-link {
      color: cyan;
      text-decoration: none;
      display: block;
      margin-top: 15px;
    }

    .register-link:hover {
      text-decoration: underline;
    }

    footer {
      width: 100%;
      padding: 10px 0;
      background: rgba(20, 20, 20, 0.9);
      text-align: center;
      font-size: 14px;
      color: cyan;
      position: absolute;
      bottom: 0;
    }
  </style>
</head>
<body>
  <header>Bharati Vidyapeeth (Deemed To Be University) College of Engineering, Pune</header>

  <div class="login-container">
    <h1>Secured Chat</h1>

    <form action="" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required name="username">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>

        <button type="submit" class="btn-login" name="login">Login</button>
    </form>

    <a href="register.php" class="register-link">Don't have an account? Register</a>
  </div>

  <footer>&copy; 2025 Secured Chat App. All rights reserved.</footer>

  <?php require_once 'server/server.php'; ?>

</body>
</html>

<script>
	if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>