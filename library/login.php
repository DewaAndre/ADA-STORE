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
  max-width: 656px;
    margin: 50px auto;
    background-color: #FFFFFF;
    padding: 30px 70px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  color: #333333;
}

.btn .bi path{
  heigh:10rem;
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

/* facebook */
.btn-primary {
  display: block;
  width: 100%;
  padding: 10px;
  margin: 1rem 0;
  border: none;
  border-radius: 5px;
  background-color: #0310c5;
  color: #FFFFFF;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0px 4px 20px 10px rgba(0, 0, 0, 0.25);
  border-radius: 50px
}

.btn-primary:hover {
  background-color: #000658;
  transition:0.5s;
}

/* google */
.btn-danger {
  display: block;
  width: 100%;
  margin:1rem 0 ;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background: #DB3500;
  color: #FFFFFF;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0px 4px 20px 10px rgba(0, 0, 0, 0.25);
  border-radius: 50px
}
.btn-danger:hover{
  background:#9e2600;
  transition:0.5s;
}

.btn-login {
  height: 3rem;
  display: block;
  width: 20rem;
  margin: auto;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background: #A6A6A6;
  color: #FFFFFF;
  font-size: 25px;
  font-weight: bold;
  cursor: pointer;
  box-shadow: 0px 4px 20px 10px rgba(0, 0, 0, 0.25);
  border-radius: 50px
}
.btn-login:hover{
  background:#6c6868;
  transition:0.5s;
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
          <a href="../commponen/order.html" style="text-decoration: none;">
            <button type="button" class="btn btn-primary facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
            </svg>
            | Facebook
            </button>
          </a>
          <a href="../commponen/order.html" style="text-decoration: none;">
            <button type="button" class="btn btn-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
              <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
            </svg>
            | Google
            </button>
          </a>
          <label for="username">USERNAME</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">PASSWORD</label>
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
        <button type="submit" name="submit" class="btn-login">LOGIN</button>
        <div class="regis">
          <a href="./regis.php">Dont have account? <span>Register</span></a>
        </div>
      </form>
    </div>
  </body>
</html>

