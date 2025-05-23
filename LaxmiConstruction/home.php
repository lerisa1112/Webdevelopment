<?php
include("header.php");
session_start();

include("connection.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

?>




<!-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laxmi Construction</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   

    <header class="header">
        <a href="#" class="logo">Laxmi<span> Construction</span></a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.html">About</a>
            <a href="projects.html">Projects</a>
            <div class="dropdown">
                <a href="#" class="dropbtn">Property</a>
                <div class="dropdown-content">
                    <a href="rent.html">Rent</a>
                    <a href="buy.html">Buy</a>
                </div>
            </div>
            <a href="contact.php">Contact</a>
        </nav>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <form action="" class="login-form">
            <h3>Login Form</h3>
            <input type="email" placeholder="Enter your email" class="box">
            <input type="password" placeholder="Enter your password" class="box">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <input type="submit" value="Login now" class="btn">
            <p>Don't have an account? <a href="#">Create one!</a></p>
        </form>
    </header>
</body>

</html> -->


   <!-- HOME -->
   <section class="home" id="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <section class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
               <div class="content">
                  <h3>we provide best service</h3>
                  <p>At Laxmi Constructions, we are dedicated to turning your property dreams into reality. 
                  </p>
                  <a href="#about" class="btn">get started</a>
               </div>
            </section>

      </div>
   </section>

   <!-- ABOUT -->
   <section class="about" id="about">
      <h1 class="heading">about us</h1>

      <div class="row">
         <div class="video">
            <video src="images/i.mp4" loop muted autoplay></video>
         </div>

         <div class="content">
            <h3>We will provide you the best work which you dreamt for!</h3>
            <p>Browse through our portfolio to see examples of our past projects, and check out our Property listings where you can find homes available for rent or buy. Additionally, our user-friendly Home coast Calculator is designed to assist you in estimating property expenses, ensuring you make informed decisions</p>
            <a href="#services" class="btn">read more</a>
         </div>
      </div>

      

     
   </section>

   <!-- SERVICES -->
   <section class="services" id="services">
      <h1 class="heading">our services</h1>

      <div class="box-container">
         <div class="box">
            <img src="images/service-1.png" alt="">
            <h3>building construction</h3>
            <p>A construction website serves as a digital storefront and portfolio, allowing you to engage with prospective clients even when they aren't physically visiting a showroom.</p>
         </div>

         <div class="box">
            <img src="images/service-2.png" alt="">
            <h3>house renovation</h3>
            <p>Laxmi Construction provides professional house renovation services, delivering quality results and timely completion. From small updates to full remodels, we transform homes efficiently to meet your expectations.</p>
         </div>

         <div class="box">
            <img src="images/service-3.png" alt="">
            <h3>architechture design</h3>
            <p>
            Laxmi Construction offers professional architectural design services, providing creative and functional solutions to bring your vision to life efficiently.</p>
         </div>

         <div class="box">
            <img src="images/service-4.png" alt="">
            <h3>material supply</h3>
            <p>Laxmi Construction offers material supply services, providing high-quality construction materials promptly and efficiently.</p>
         </div>
      </div>
   </section>

   <!-- PROJECTS -->
   <section class="projects" id="projects">
      <h1 class="heading">our projects</h1>

      <div class="box-container">
         <a href="images/1.jpg" class="box">
            <div class="image">
               <img src="images/1.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Heliconia homes</h3>
                  <P>Vapi</P>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/sai.jpg" class="box">
            <div class="image">
               <img src="images/sai.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Sai Nagar</h3>
                  <p>Kalamboli</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/kh.jpg" class="box">
            <div class="image">
               <img src="images/kh.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Royal Place</h3>
                  <p>Kharghar</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/man.jpg" class="box">
            <div class="image">
               <img src="images/man.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Mangal Murti</h3>
                  <p>Kharghar</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/royal.png" class="box">
            <div class="image">
               <img src="images/royal.png" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Royal Township</h3>
                  <p>Surat</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>

         <a href="images/5.jpg" class="box">
            <div class="image">
               <img src="images/5.jpg" alt="">
            </div>
            <div class="content">
               <div class="info">
                  <h3>Imphal city mall</h3>
                  <p>Imphal</p>
               </div>
               <i class="fas fa-plus"></i>
            </div>
         </a>
      </div>
   </section>

   

   <!---coast-->
<!-- <section id="calculator" class="cal">
   <h1><bold><center>Find Out How Much Your Home-building Project Will Cost </center></bold></h1><br>
   <form id="costForm" action="calculate.php">
       <label for="state">State:-</label>
       <input type="text" id="state" name="state" required>
       
       <label for="city">City:-</label>
       <input type="text" id="city" name="city" required>
       
       <label for="area">Area:-</label>
       <input type="number" id="area" name="area" required>
       
       <label for="unit">Select Unit:-</label>
       <select id="unit" name="unit" required>
           <option value="sq_meters">Square Meters</option>
           <option value="sq_feet">Square Feet</option>
       </select><br>
       
       <br>
       <button type="button" onclick="calculateCost()">Calculate</button>
       <button type="reset">Clear</button></br>
   </form>
   <div id="result"></div>
   <button id="printButton" style="display:none;">Print PDF</button>
</section>
<br><br> -->

   
  


    
   <?php
   include("footer.php");
    ?>


</body>

</html> 