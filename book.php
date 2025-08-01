<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- icon link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="style.css">
</head>
    
<body>
    
<!-- header section start -->
<section class="header">

    <a href="index.php" class="logo">Viator</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- header section end -->

<div class="heading" style="background: url(assets/package-head1.jpg) no-repeat">
    <h1>book now</h1>
</div>

<!-- booking section start -->

<section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" id="username" name="name" placeholder="Enter your name" required>
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="text" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone" required>
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address" required>
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <select id="location" name="location" required> 
                    <option value="France">France - $567/person</option> 
                    <option value="Italy">Italy - $750/person</option> 
                    <option value="Spain">Spain - $650/person</option> 
                    <option value="Germany">Germany - $567/person</option> 
                    <option value="South Korea">South Korea - $750/person</option> 
                    <option value="Turkey">Turkey - $650/person</option>
                    <option value="Japan">Japan - $567/person</option> 
                    <option value="Australia">Australia - $750/person</option> 
                    <option value="Malaysia">Malaysia - $650/person</option>
                    <option value="Thailand">Thailand - $567/person</option> 
                    <option value="indonesia">indonesia - $750/person</option> 
                </select> 
            </div>
            <div class="inputBox">
                <span>Guests :</span>
                <input type="number" placeholder="number of guests" name="guests" required>
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving" required>
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form> 

</section>

<!-- booking section end -->

<!-- footer scetion starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
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
<script src="script.js"></script>

</body>
</html
    
