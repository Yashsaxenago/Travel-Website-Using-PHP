<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   


   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Tour and Travel</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
     <b> <a href="login.php" class="logo">login</a></b>
     <b> <a href="signup.php" class="logo">Sign Up</a></b>
     <b> <a href="logout.php" class="logo">log out</a></b>
      
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/1.webp) no-repeat">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Travel arround the world</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/2.webp) no-repeat">
            <div class="content">
               <span>Explore, Discover, Travel</span>
               <h3>Discover the new places</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Eplore, Discover, Travel</span>
               <h3>Make your tour worldwide</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/3.webp" alt="">
   </div>

   <div class="content">
      <h3>About us</h3>
      <p>We are a main online travel organization in America giving a ‘best as far as a class can tell with the objective to be ‘ America ‘s Travel Planner’. Through our site, www.’Company Name’.com, our versatile applications, and our other related stages, recreation, and business voyagers can investigate, explore, analyze costs and book an extensive variety of administrations taking into account their movement needs.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/4.jpg" alt="">
         </div>
         <div class="content">
            <h3>Maldives</h3>
            <p>No matter where in the world you want to go, we can help get you there.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/5.jpg" alt="">
         </div>
         <div class="content">
            <h3>Australia</h3>
            <p>No matter where in the world you want to go, we can help get you there.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/6.jpg" alt="">
         </div>
         <div class="content">
            <h3>Denmark</h3>
            <p>No matter where in the world you want to go, we can help get you there.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>
<br>
<br>

   <div class="box-container mt-5">

      <div class="box">
         <div class="image">
            <img src="images/7.jpg" alt="">
         </div>
         <div class="content">
            <h3>Norway</h3>
            <p>No matter where in the world you want to go, we can help get you there.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/as.webp" alt="">
         </div>
         <div class="content">
            <h3>India</h3>
            <p>No matter where in the world you want to go, we can help get you there.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/8.webp" alt="">
         </div>
         <div class="content">
            <h3>America</h3>
            <p>No matter where in the world you want to go, we can help get you there.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>
<br>
<br>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 60% off on first booking</h3>
      <p>Book any domestic or international flight ticket & get flat 60% cashback (max cashback is 5000) in the form of ViaCash. How the offer works? If you book a flight ticket for ₹3,000, you will get a cashback of 1500 Viacash ; If you book flight ticket for ₹4,000, you will get a cashback of 2000 Viacash.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

<br>
<br>

<!-- Marquee TAGS -->
<div class="container-fluid mt-5 text-center">
<h1 class="heading-title"> our partners </h1>
            </div>

            <div class="container  mt-5">

                <marquee width="100%" behavior="scroll">

                    <a href=""><img src="images/11.jpg" height="100" width="100"></a>
                    <a href=""><img src="images/16.jpg" height="100" width="100"></a>
                    <a href=""><img src="images/13.jpg" height="100" width="100"></a>
                    <a href=""><img src="images/14.jpg" height="100" width="100"></a>
                    <a href=""><img src="images/15.jpg" height="100" width="100"></a>
                    <a href=""><img src="images/19.jpg" height="100" width="100"></a>
                    <a href=""><img src="images/18.webp" height="100" width="100"></a>

                </marquee>

            </div>
<br>
<br>

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Good value package but quite excruciating to book. Had to keep going backwards and forwards selecting different dates and rooms to see which were included in the "bula bubble" package as this wasn't immediately discernible. Flights sometimes included and other tip.</p>
            <h3>yash saxena</h3>
            <span>traveler</span>
            <img src="images/31.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Excellent! Very good service from beginning to end. Even with a COVID-related delay in the middle of it, Lisa stayed in contact with us and got us a reschedule with the utmost of ease. Thank you!</p>
            <h3>jyoti yadav</h3>
            <span>traveler</span>
            <img src="images/32.webp" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Kristy was extremely helpful ! Any questions we had were answered very quickly via email or phone call. Not my first time using travel online and definitely NOT my last ! Lisa stayed in contact with us and got us a reschedule with the utmost of ease.Lisa stayed in contact with us Thank you!</p>
            <h3>ravidhar mishra</h3>
            <span>traveler</span>
            <img src="images/33.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus recusandae cum quibusdam odio dignissimos nemo?</p>
            <h3>john deo</h3>
            <span>traveler</span>
            <img src="images/pic-4.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>john deo</h3>
            <span>traveler</span>
            <img src="images/pic-5.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus facilis laudantium magnam saepe magni ullam possimus laborum voluptas, veniam ipsum officiis quae doloribus minima ut quis. Molestiae qui distinctio possimus?</p>
            <h3>john deo</h3>
            <span>traveler</span>
            <img src="images/pic-6.png" alt="">
         </div>

      </div>

   </div>

</section>

<!-- reviews section ends -->


 







<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> yash@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> delhi, india - 112233 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   

</section>

<!-- footer section ends -->










<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>