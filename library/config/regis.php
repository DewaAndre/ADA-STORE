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
input[type="email"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 10px rgba(0, 0, 0, 0.25);
}

.btn-regis {
  height: 3rem;
  display: block;
  width: 20rem;
  margin: 1rem  auto;
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
.btn-regis:hover{
  background:#6c6868;
  transition:0.5s;
}

 p.error {
            color: red !important;
            text-align: center;
            margin-bottom: 1em;
        }
  </style>
  <body>
    <div class="container">
      <form action="./cek_regis.php" method="post" class="login-form">
        <h1>REGISTER | ADA STORE</h1>
        <div class="form-group">
          <label for="name">Nama</label>
          <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="level">Level</label>
          <input type="text" id="level" name="level" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
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
        <button type="submit" name="submit" class="btn-regis">REGISTER</button>
      </form>
    </div>
  </body>
</html>

