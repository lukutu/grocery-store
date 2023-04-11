<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Our commitment to sourcing only the freshest, organic and locally grown produce, meats, and seafood means that you can trust the food you bring home to your family. With our fast and convenient online ordering and delivery service, you can shop from the comfort of your own home and have your groceries delivered right to your doorstep.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p> At Fresh-pickens, we provide a wide selection of high-quality food products to meet all your grocery needs. We offer organic and locally grown produce, grass-fed and free-range meats, and sustainable seafood options. Our online ordering and delivery service is fast, reliable, and convenient, allowing you to shop from the comfort of your own home and have your groceries delivered right to your doorstep.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Great experience! Easy to navigate website and fast delivery. Fresh produce and competitive prices. Will order again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Brian Letting</h3>
      </div>

      <div class="box">
         <img src="images/face-2.jpg" alt="">
         <p>Fast delivery, great selection and competitive prices. Will definithis online grocery shop again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dennis Ombachi</h3>
      </div>

      <div class="box">
         <img src="images/face-4.avif" alt="">
         <p>Great service, fast delivery, and high-quality products. I'm impressed with this online grocery shop and will be a repeat customer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lynn Ruiru</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Mindblowing online grocery shopping experience - easy to navigate website, timely delivery, and fresh products. Highly recommend!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Faith Mutai</h3>
      </div>

      <div class="box">
         <img src="images/pic-1.avif" alt="">
         <p>Excellent online grocery shop, great prices, and fast delivery. Will definitely use again for my weekly grocery shopping.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bach Monanti</h3>
      </div>

      <div class="box">
         <img src="images/face-3.jpg" alt="">
         <p>Fast delivery and fresh products, great online shopping experience overall. Will definitely be ordering from this store again.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lucy Laura</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>