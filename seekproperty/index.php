<?php
session_start();
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
               <?php
               if(isset( $_SESSION['isLogIn'])) 
               $isLogIn =  $_SESSION['isLogIn'];

               else 
                  $isLogIn = false;
               
               if ($isLogIn == true)
               echo '<li><a href="logout.php">log out</a></li>';
               else 
               echo '<li><a href="login_form.php">login</a></li>';
               echo '<li><a href="register_form.php">register</a></li>';
               ?> 
               <!-- <li><a href="login_form.php">login</a></li>
                -->
               
            </ul>
         </li>
      </ul>
      </div>
      <div class="menu" onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h520v80H120Zm664-40L584-480l200-200 56 56-144 144 144 144-56 56ZM120-440v-80h400v80H120Zm0-200v-80h520v80H120Z"/></svg> </div>

      </section>
    </nav>
</header>


<div class="home">

   <section class="center">

      <form action="search.php" method="post">
         <h3>find your perfect home</h3>
         <div class="box">
            <p>Select location <span>*</span></p>
            <select name="type" class="input" required>
                  <option value="cebu_city">Cebu City</option>
                  <option value="manila_city">Manila City</option>
                  <option value="davao_city">Davao City</option>
               </select>
          </div>
         <div class="flex">
            <div class="box">
               <p>property type <span>*</span></p>
               <select name="type" class="input" required>
                  <option value="flat">flat</option>
                  <option value="house">house</option>
                  <option value="shop">shop</option>
               </select>
            </div>
            <div class="box">
               <p>maximum budget <span>*</span></p>
               <select name="minimum" class="input" required>
                  <option value="5000000">50k ₱</option>
                  <option value="1000000">40k ₱</option>
                  <option value="2000000">30k ₱</option>
                  <option value="3000000">20k ₱</option>
                  <option value="4000000">10k ₱</option>
                  <option value="4000000">9k ₱</option>
                  <option value="5000000">8k ₱</option>
                  <option value="6000000">7k ₱</option>
                  <option value="7000000">6k ₱</option>
                  <option value="8000000">5k ₱</option>
                  <option value="9000000">4k ₱</option>
                  <option value="10000000">3k ₱</option>
                  <option value="20000000">2k ₱</option>
                  <option value="30000000">1k ₱</option>
               </select>
            </div>
         </div>
         <input type="submit" value="search property" name="search" class="btn">
      </form>

   </section>

</div>

<section class="services">

   <h1 class="heading">our services</h1>

   <div class="box-container">

      <div class="box">
      <lord-icon class="house-icon"
    src="https://cdn.lordicon.com/epietrpn.json"
    trigger="hover"
    style="width:50px;height:50px">
</lord-icon>
         <h3>buy house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
      <lord-icon
    src="https://cdn.lordicon.com/wtyzzeli.json"
    trigger="hover"
    style="width:50px;height:50px">
</lord-icon>
         <h3>rent house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
      <lord-icon
    src="https://cdn.lordicon.com/lxizbtuq.json"
    trigger="loop"
    delay="500"
    style="width:50px;height:50px">
</lord-icon>
         <h3>sell house</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
      <lord-icon
    src="https://cdn.lordicon.com/nnvmcsqr.json"
    trigger="hover"
    style="width:50px;height:50px">
</lord-icon>
         <h3>flats and buildings</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
      <lord-icon
    src="https://cdn.lordicon.com/eiekfffz.json"
    trigger="hover"
    style="width:50px;height:50px">
</lord-icon>
         <h3>shops and malls</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
      <lord-icon
    src="https://cdn.lordicon.com/wsdieofl.json"
    trigger="hover"
    style="width:50px;height:50px">
</lord-icon>
         <h3>24/7 service</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

   </div>

</section>


<section class="listings">

   <h1 class="heading">latest listings</h1>

   <div class="box-container">

      <div class="box">
         <div class="admin">
         <img src="images/ivant.jpg" width="40px" height="40px" >
            <div>
               <p>Ivan Tuico</p>
               <span>10-11-2022</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>house</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-1.webp" alt="">
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.php" class="btn">view property</a>
      </div>

      <div class="box">
         <div class="admin">
            <img src="images/merwin.jpg" width="40px" height="40px" >
            <div>
               <p>Merwin Osman</p>
               <span>10-11-2022</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>flat</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-2.webp" alt="">
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.php" class="btn">view property</a>
      </div>

      <div class="box">
         <div class="admin">
         <img src="images/jack.jpg" width="40px" height="40px" >
            <div>
               <p>Jack Torino</p>
               <span>10-11-2022</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>flat</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-3.jpg" alt="">
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-bath"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.php" class="btn">view property</a>
      </div>

   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.php" class="inline-btn">view all</a>
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


</footer>
</body>
</html>