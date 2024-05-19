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

<section class="about">

   <div class="row">
      <div class="image">
      <lord-icon
    src="https://cdn.lordicon.com/szoiozyr.json"
    trigger="loop"
    delay="2000"
    style="width:250px;height:250px">
</lord-icon>
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolorem provident voluptatum distinctio laborum veritatis vitae suscipit praesentium fugiat unde?</p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
      <lord-icon
    src="https://cdn.lordicon.com/unukghxb.json"
    trigger="hover"
    stroke="dark"
    style="width:80px;height:80px">
</lord-icon>
         <h3>search property</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, placeat.</p>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>john deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</p>
      </div>

   </div>

</section>



<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:09266486157"><i class="fas fa-phone"></i><span>09266486157</span></a>
         <a href="tel:09956700752"><i class="fas fa-phone"></i><span>09956700752</span></a>
         <a href="mailto:jacktorino8@gmail.com"><i class="fas fa-envelope"></i><span>jacktorino8@gmail.com</span></a>
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
   </footer>

    <script src="script.js"></script
</body>
</html>