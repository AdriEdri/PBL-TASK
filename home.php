<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</head>
<body>
    
<!-- header section start -->
<section class="header">

    <a href="home.php" class="logo">Viator</a>

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

<!-- home section starts -->

<section class="home">

    <div class=" swiper home-slider">

        <div class="swiper-wrapper">

        <div class=" swiper-slide slide" style="background:url(assets/slide4.jpg) no-repeat">
            <div class="content">
                <span> explore, discover, travel</span>
                <h3> travel around the world </h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(assets/slide2.png) no-repeat">
            <div class="content">
                <span> explore, discover, travel</span>
                <h3> discover the new places </h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide slide" style="background:url(assets/slide3.png) no-repeat">
            <div class="content">
                <span> explore, discover, travel</span>
                <h3> make it worthwhile </h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>
<br>
<br>


<!-- home section endss -->

<!-- services section starts -->

<section class="services">

    <h1 class="heading-title"> our services </h1>

    <div class="box-container">

    <div class="box">
        <img src="assets/service1.png" alt="">
        <h3> adventure </h3>
    </div>

    <div class="box">
        <img src="assets/service2.png" alt="">
        <h3> tour guide </h3>
    </div>

    <div class="box">
        <img src="assets/service3.png" alt="">
        <h3> trekking </h3>
    </div>

    <div class="box">
        <img src="assets/service4.png" alt="">
        <h3> camp fire </h3>
    </div>

    <div class="box">
        <img src="assets/service5.png" alt="">
        <h3> off road </h3>
    </div>

    <div class="box">
        <img src="assets/service6.png" alt="">
        <h3> camping </h3>
    </div>

    </div>

</section>

<!-- services section ends -->

<!-- home about section starts -->

<section class="home-about">
    <div class="image">
        <img src="assets/home-about.png" alt="">
    </div>

    <div class="content">
        <h3>About us</h3>
        <p>Viator is a trip planner and guide company. We specialize in trip guides and the best trip packages from 12 countries around the 
        world.<br> We believe that travelling isn't just about trips, but creating long lasting memories and discovering more about the world.</p>
       <a href="about.php" class="btn">Read more</a>
    </div>
</section>

 <!-- home about section ends -->

 <!-- home package section starts -->

 <section class="home-packages">

<h1 class="heading-title"> our packages </h1>

<div class="box-container">

<div class="box">
    <div class="image">
        <img src="assets/home-packages.png" alt="">
    </div>
    <div class="content">
        <h3>Malaysia</h3>
        <p>A melting pot of cultures, rainforests, beaches, and culinary delights.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</div>

<div class="box">
    <div class="image">
        <img src="assets/home-packages2.png" alt="">
    </div>
    <div class="content">
        <h3>Japan</h3>
        <p>Innovative technology, serene temples, seasonal beauty, and unique traditions.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</div>

<div class="box">
    <div class="image">
        <img src="assets/home-packages3.png" alt="">
    </div>
    <div class="content">
        <h3>France</h3>
        <p>A blend of art, wine, fashion, and iconic landmarks.</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</div>

</div>

<div class="load-more"> <a href="package.php" class="btn">load more</a></div>

 </section>

 <!-- home package section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>up to 10% off</h3>
        <p>Enjoy incredible discounts on travel packages. Take advantage of our limited-time offer and book now to 
            experience unforgettable adventures at a fraction of the cost. Secure your getaway today!</p>
        <a href="book.php" class="btn">book now!</a>
    </div>
</section>

 <!-- home offer section ends -->




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

    <div class="credit"> created by <span>Viator</span> | all right reserved </div>
    
</section>

<!-- footer scetion ends -->

<!-- js link -->
<script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider",{
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
});
</script>

<script src="script.js"></script>

</body>
</html>

