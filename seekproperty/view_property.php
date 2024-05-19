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

<section class="view-property">

   <div class="details">
      <div class="thumb">
         <div class="big-image">
            <img src="images/house-img-1.webp" alt="">
         </div>
         <div class="small-images">
            <img src="images/house-img-1.webp" alt="">
            <img src="images/hall-img-1.webp" alt="">
            <img src="images/kitchen-img-1.webp" alt="">
            <img src="images/bathroom-img-1.webp" alt="">
         </div>
      </div>
      <h3 class="name">modern flats and appartments</h3>
      <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 400104</span></p>
      <div class="info">
         <p><i class="fas fa-tag"></i><span>15 lac</span></p>
         <p><i class="fas fa-user"></i><span>john deo (owner)</span></p>
         <p><i class="fas fa-phone"></i><a href="tel:1234567890">1234567890</a></p>
         <p><i class="fas fa-building"></i><span>flat</span></p>
         <p><i class="fas fa-house"></i><span>sale</span></p>
         <p><i class="fas fa-calendar"></i><span>10-11-2022</span></p>
      </div>
      <h3 class="title">details</h3>
      <div class="flex">
         <div class="box">
            <p><i>rooms :</i><span>2 BHK</span></p>
            <p><i>deposit amount :</i><span>0</span></p>
            <p><i>status :</i><span>ready to move</span></p>
            <p><i>bedroom :</i><span>3</span></p>
            <p><i>bathroom :</i><span>2</span></p>
            <p><i>balcony :</i><span>1</span></p>
         </div>
         <div class="box">
            <p><i>carpet area :</i><span>750sqft</span></p>
            <p><i>age :</i><span>3 years</span></p>
            <p><i>room floor :</i><span>3</span></p>
            <p><i>total floors :</i><span>22</span></p>
            <p><i>furnished :</i><span>semi-furnished</span></p>
            <p><i>loan :</i><span>available</span></p>
         </div>
      </div>
      <h3 class="title">amenities</h3>
      <div class="flex">
         <div class="box">
            <p><i class="fas fa-check"></i><span>lifts</span></p>
            <p><i class="fas fa-check"></i><span>security guards</span></p>
            <p><i class="fas fa-times"></i><span>play ground</span></p>
            <p><i class="fas fa-check"></i><span>gardens</span></p>
            <p><i class="fas fa-check"></i><span>water supply</span></p>
            <p><i class="fas fa-check"></i><span>power backup</span></p>
         </div>
         <div class="box">
            <p><i class="fas fa-check"></i><span>parking area</span></p>
            <p><i class="fas fa-times"></i><span>gym</span></p>
            <p><i class="fas fa-check"></i><span>shopping mall</span></p>
            <p><i class="fas fa-check"></i><span>hospital</span></p>
            <p><i class="fas fa-check"></i><span>schools</span></p>
            <p><i class="fas fa-check"></i><span>market area</span></p>
         </div>
      </div>
      <h3 class="title">description</h3>
      <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum cupiditate aliquid ipsum recusandae maxime nisi, velit eaque, libero, exercitationem culpa accusamus. Neque dolor quaerat modi saepe facere dignissimos temporibus molestias.</p>
      <form action="" method="post">
         <input type="submit" value="save property" name="save" class="inline-btn">
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

  
</footer>
    <script>
   document.querySelectorAll('.view-property .details .thumb .small-images img').forEach(images =>{
   images.onclick = () =>{
      src = images.getAttribute('src');
      document.querySelector('.view-property .details .thumb .big-image img').src = src;
   }
});
</script>
</body>
</html>