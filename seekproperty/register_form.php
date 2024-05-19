<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['fullName']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <script src="https://cdn.lordicon.com/lordicon.js"></script>


</head>
<style>
   @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap");

* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
}

body {
  background: url(images/eh.jpeg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

nav {
  /* background-color: rgba(17, 17, 16, 0.359); */
  position: sticky;
  top: 0;
  z-index: 999;
}

nav ul {
  width: 100%;
  height: 50px;
  list-style: none;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  padding: 0 80px;
}

nav a {
  font-size: 20px;
  height: 100%;
  padding: 0 20px;
  text-decoration: none;
  display: flex;
  transition: transform 0.5s;
  align-items: center;
  color: #f0f0f0;
  background-color: #0e4f2b;
  border-radius: 20px;
}

nav a:hover {
  background-color: #f0f0f0;
  color: #0e4f2b;
  transform: scale(1.2);
}

nav li:first-child {
  margin-right: auto;
}

nav button {
  font-size: 15px;
  padding: 1px 10px;
  cursor: pointer;
}

.menu-button {
  display: none;
  margin-top: 5px;
}

@media (max-width: 1200px) {
  .hideOnMobile {
    display: none;
  }
  .menu-button {
    display: block;
  }
}

@media (max-width: 700px) {
  .login-btn {
    display: none;
  }
  nav ul {
    padding: 0 20px;
  }
}

.menu-button {
  cursor: pointer;
}

.sidebar {
  position: fixed;
  top: 0;
  right: 0;
  height: 100vh;
  width: 250px;
  z-index: 9999;
  background-color: rgb(0, 0, 0);
  backdrop-filter: blur(10px);
  box-shadow: -10px 0 10px rgba(0, 0, 0, 0.1);
  display: none;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  cursor: pointer;
  padding: 40px;
}

.sidebar li {
  width: 100%;
}

.sidebar a {
  width: 100%;
}

.form-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0px 80px;
  padding-bottom: 60px;
}

.form-container form {
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  background: #ffffffb9;
  text-align: center;
  width: 420px;
  height: 540px;
}

.form-container form h3 {
  font-size: 30px;
  text-transform: uppercase;
  margin-top: 10px;
  margin-bottom: 10px;
  color: #333;
}

.form-container form input,
.form-container form select {
  width: 100%;
  padding: 10px 15px;
  font-size: 17px;
  margin: 8px 0;
  background: #eee;
  border-radius: 5px;
}

.form-container form select option {
  background: #fff;
}

.form-container form .form-btn {
  background: #fbd0d9;
  color: crimson;
  text-transform: capitalize;
  font-size: 20px;
  cursor: pointer;
}

.form-container form .form-btn:hover {
  background: crimson;
  color: #fff;
}

.form-container form p {
  margin-top: 10px;
  font-size: 20px;
  color: #333;
}

.form-container form p a {
  color: crimson;
}

.form-container form .error-msg {
  margin: 10px 0;
  display: block;
  background: crimson;
  color: #fff;
  border-radius: 5px;
  font-size: 20px;
  padding: 10px;
}

.logo {
  margin-bottom: 100px;
  text-align: center;
  padding: 30px;
  color: #eee;
  text-shadow: #333;
}

.logo p {
  font-size: 20px;
  text-shadow: #333;
}

.house-icon {
  position: absolute;
  top: 70px;
}

.containerOfAll {
  height: 110vh;
  background-color: #0b0a0a63;
}
.form-container1 {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 40px 80px;
  padding-bottom: 60px;
}

.form-container1 form {
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  background: #ffffffb9;
  text-align: center;
  width: 420px;
  height: 350px;
}

.form-container1 form h3 {
  font-size: 30px;
  text-transform: uppercase;
  margin-top: 10px;
  margin-bottom: 10px;
  color: #333;
}

.form-container1 form input,
.form-container1 form select {
  width: 100%;
  padding: 10px 15px;
  font-size: 17px;
  margin: 8px 0;
  background: #eee;
  border-radius: 5px;
}

.form-container1 form select option {
  background: #fff;
}

.form-container1 form .form-btn {
  background: #fbd0d9;
  color: crimson;
  text-transform: capitalize;
  font-size: 20px;
  cursor: pointer;
}

.form-container1 form .form-btn:hover {
  background: crimson;
  color: #fff;
}

.form-container1 form p {
  margin-top: 10px;
  font-size: 20px;
  color: #333;
}

.form-container1 form p a {
  color: crimson;
}

.form-container1 form .error-msg {
  margin: 10px 0;
  display: block;
  background: crimson;
  color: #fff;
  border-radius: 5px;
  font-size: 20px;
  padding: 10px;
}

.footer {
  height: 30vh;
  background-color: #0e4f2b;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 1);
}

</style>
 
<body>
   <div class="containerOfAll">
   
         <nav>
             <ul>
               
                <li><a class="hideOnMobile" href="index.php">Home</a></li>
                </ul>
        </nav>

      
<div class="form-container">
<div class="logo">
         <img src="images/Logo1.png" width="100px" height="100px">
       <h1>SEEK PROPERTY</h1>
       <p>When one door closes, buy another one and open it yourself</p>
        </div>
   <form action="" method="post">
      <h3>register now&ensp;<lord-icon class="house-icon"
    src="https://cdn.lordicon.com/epietrpn.json"
    trigger="hover"
    style="width:50px;height:50px">
</lord-icon></h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="fullName" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>
   </div>
</div>
<div class="footer"></div>
</body>
</html>