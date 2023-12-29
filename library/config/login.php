<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <style>

	* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: #F8F8F8;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  background-color: #FFFFFF;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  color: #333333;
}

.icon {
  text-align: center;
  margin-bottom: 20px;
}


.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #666666;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
}

.btn {
  display: block;
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #0310c5;
  color: #FFFFFF;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
}

.btn:hover {
  background-color: #000658;
}

 p.error {
            color: red !important;
            text-align: center;
            margin-bottom: 1em;
        }
.container .regis{
  padding: 10px;
  display: block;
  justify-content: center;
}

.container .regis a{
  text-decoration: none;
  text-align: center;
  color: #666666;
}
.container .regis a span{
  color: #0310c5;
}
  </style>
  <body>
    <div class="container">
      <form action="./cek_login.php" method="post" class="login-form">
        <h1>LOGIN | ADA STORE</h1>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
		  <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'emptyfields') {
                    echo '<p class="error">Silahkan isi semua kolom yang tersedia!</p>';
                } elseif ($_GET['error'] == 'wrongpwd') {
                    echo '<p class="error">Password yang dimasukkan salah!</p>';
                } elseif ($_GET['error'] == 'nouser') {
                    echo '<p class="error">Username tidak ditemukan!</p>';
                }
            }
        ?>
        <button type="submit" name="submit" class="btn">Login</button>
        <div class="regis">
          <a href="./regis.php">Dont have account? <span>Register</span></a>
        </div>
      </form>
    </div>
  </body>
</html>

