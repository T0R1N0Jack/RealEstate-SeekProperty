<?php

@include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seek Property</title>
    <link rel="icon" type="images" href="images/Logo1.png">
    <link rel="stylesheet" href="style.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Truculenta:opsz,wght@12..72,100..900&display=swap"
    rel="stylesheet"
  />
  <script src="https://cdn.lordicon.com/lordicon.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="script.js"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
</head>
<body>
        <header class="header">

<nav class="navbar nav-1">
   <section class="flex">
      <a href="index.php" class="logo">  <img 
                        src="images/Logo1.png"
                        alt="logo"
                        width="40px"
                        height="40px"
                      /></i><p>&ensp;SeekProperty&ensp;<lord-icon
    src="https://cdn.lordicon.com/unukghxb.json"
    trigger="hover"
    stroke="light"
    colors="primary:#f2e2d9,secondary:#16c72e"
    style="width:20px;height:20px">
</lord-icon></p></a>


      <div class="menuBar" >
         <ul>
            <li><a href="#">buy<i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="#">house</a></li>
                  <li><a href="#">flat</a></li>
                  <li><a href="#">shop</a></li>
                  <li><a href="#">ready to move</a></li>
                  <li><a href="#">furnished</a></li>
               </ul>
            </li>
            <li><a href="#">sell<i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="#">post property</a></li>
                  <li><a href="#">dashboard</a></li>
               </ul>
            </li>
            <li><a href="#">rent<i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="listings.php">house</a></li>
                  <li><a href="listings.php">flat</a></li>
                  <li><a href="listings.php">shop</a></li>
               </ul>
            </li>
            <li><a href="#">help<i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="about.php">about us</a></i></li>
                  <li><a href="contact.php">contact us</a></i></li>
               </ul>
            </li>
         </ul>
   

      <ul>
         <li><a href="#">saved <i class="far fa-heart"></i></a></li>
         <li><a href="#">account <i class="fas fa-angle-down"></i></a>
            <ul>
               <li><a href="login_form.php">login</a></li>
               <li><a href="register_form.php">register</a></li>
            </ul>
         </li>
      </ul>
      </div>
      <div class="menu" onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h520v80H120Zm664-40L584-480l200-200 56 56-144 144 144 144-56 56ZM120-440v-80h400v80H120Zm0-200v-80h520v80H120Z"/></svg> </div>

      </section>
    </nav>
</header>

<section class="contact">

   <div class="row">
      <div class="image">
      <lord-icon
    src="https://cdn.lordicon.com/nqisoomz.json"
    trigger="hover"
    style="width:550px;height:550px">
</lord-icon>
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>



<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>09266486157</span></a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i><span>09956700752</span></a>
         <a href="mailto:shaikhanas@gmail.com"><i class="fas fa-envelope"></i><span>jacktorino8@gmail.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>Cebu City, 6000</span></a>
      </div>

      <div class="box">
         <a href="index.php"><span>home</span></a>
         <a href="about.php"><span>about</span></a>
         <a href="contact.php"><span>contact</span></a>
         <a href="listings.php"><span>all listings</span></a>
         <a href="#"><span>saved properties</span></a>
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit">&copy; copyright @ 2022 by <span>mr. web designer</span> | all rights reserved!</div>

</footer>

    <script src="script.js"></script
</body>
</html>