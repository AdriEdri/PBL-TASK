<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- css link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section start -->
<section class="header">

    <a href="home.php" class="logo">Travel</a>

    <nav class="navbar">
    <?php
    $navItems = [
        "Home" => "home.php",
        "About" => "about.php",
        "Package" => "package.php",
        "Book" => "book.php"
    ];
    // Loop through navigation items and create links
    foreach ($navItems as $name => $link) {
        echo "<a href='$link'>$name</a>";
    }
    ?>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- header section end -->

<div class="heading" style="background:url('assets/about us.png');">
    <h1>about us</h1>
</div>

<!-- about section starts -->

<section class="about">

<div class="image">
    <img src="assets/home-about.png" alt="">
</div>

<div class="content">
    <h3>About us</h3>
    <p>Viator is a trip planner and guide company. We specialize in trip guides and the best trip packages from countries around the 
        world.<br> We believe that travelling isn't just about trips, but creating long lasting memories and discovering more about the world.</p>
   <h4>Our Mission</h4>
        <p>Our mission is to provide users with the best experience while travelling</p>
</div>

</section>

 <!-- about section ends -->
 <section class="about2">


<div class="content">
    <h3>why choose us?</h3>
    <p>Viator provides users with the best planners and trip packages around the world, good deals and fun activities to do all in one trip.</p>
    <p>We consider customer's safety, health and help with lingual skills.</p>
        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-map"></i>
                <span>top destinantions</span>
            </div>
            <div class="icons">
                <i class="fas fa-hand-holding-usd"></i>
                <span>affordable price</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 guide service</span>
            </div>
        </div>
</div>
<div class="image">
    <img src="assets/about us2.png" alt="">
</div>

</section>

<br> 

  <!-- reviews section starts --> 
   <div class="heading-title"><h3>OUR TEAM</h3></div> 
<section class="our-team"> 
 
<div class="team"> 
    <div class="timage"> 
        <img src="assets/team1.jpg" alt=""> 
    </div> 
    <div class="teamm"> 
        <h3>Qaseh Azalea</h3> 
        <p>Name: Qaseh Azalea<br> 
        Birthdate: 6/4/2012<br> 
        Hobby: Sketching<br> 
        Status: Founder<br> 
        Experience: 3 years<br>  
        </p> 
    </div> 
</div> 
 
<div class="team"> 
    <div class="timage"> 
        <img src="assets/team2.jpg" alt=""> 
    </div> 
    <div class="teamm"> 
        <h3>Adriana</h3> 
        <p>Name: Nur Adriana<br> 
        Birthdate: 6/2/2012<br> 
        Hobby: Reading Novels<br> 
        Status: Founder<br> 
        Experience: 3 years <br>  
        </p> 
    </div> 
</div> 
 
</section>
<!-- footer scetion starts -->

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
        <a href="#"> <i class="fas fa-angle-right"></i> faq</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privay policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +60 11-5996-9021</a>
            <a href="#"> <i class="fas fa-phone"></i> +60 17-308-4198</a>
            <a href="#"> <i class="fas fa-envelope"></i> adrianaedril@gmail.com</a>
            <a href="#"> <i class="fas fa-envelope"></i> qasehazalea@gmail.com</a>

        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-tiktok"></i> tiktok </a>
        </div>

    </div>

    <div class="credit"> created by <span>JourneyQuest</span> | all right reserved </div>
    
</section>

<!-- footer scetion ends -->

<!-- js link -->
<script src="script.js"></script>

</body>
</html>

