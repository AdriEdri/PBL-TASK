<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$book_db = "book_db";  // Database for bookings
$travel_package_db = "travel_package";  // Database for travel package details

// Connect to the first database (book_db)
$conn_book = new mysqli($servername, $username, $password, $book_db);
if ($conn_book->connect_error) {
    die("Connection failed to book_db: " . $conn_book->connect_error);
}

// Fetch the most recent booking from 'book_db.books_data'
$sql_booking = "SELECT location FROM books_data ORDER BY id DESC LIMIT 1";
$result_booking = $conn_book->query($sql_booking);

$last_booking_location = "";
if ($result_booking->num_rows > 0) {
    while ($row = $result_booking->fetch_assoc()) {
        $last_booking_location = $row['location'];
    }
}

// Define a list of suggestions based on last booking location
$suggestions = [
    "France" => ["Italy", "Germany", "South Korea", "Turkey", "Japan", "The UK", "Australia", "Malaysia", "Thailand", "Indonesia"],
    "Italy" => ["France", "Germany", "South Korea", "Japan", "Turkey", "The UK", "Australia", "Malaysia", "Thailand", "Indonesia"],
    "Germany" => ["Italy", "France", "South Korea", "Turkey", "Japan", "The UK", "Australia", "Malaysia", "Thailand", "Indonesia"],
    "South Korea" => ["Japan", "Italy", "Turkey", "France", "Germany", "The UK", "Australia", "Malaysia", "Thailand", "Indonesia"],
    "Turkey" => ["South Korea", "Italy", "Germany", "France", "Japan", "The UK", "Australia", "Malaysia", "Thailand", "Indonesia"],
    "Japan" => ["South Korea", "Italy", "Germany", "France", "Turkey", "The UK", "Australia", "Malaysia", "Thailand", "Indonesia"],
    "The UK" => ["France", "Germany", "South Korea", "Turkey", "Italy", "Japan", "Australia", "Malaysia", "Thailand", "Indonesia"],
    "Australia" => ["France", "Germany", "Italy", "South Korea", "Turkey", "Japan", "The UK", "Malaysia", "Thailand", "Indonesia"],
    "Malaysia" => ["Thailand", "Indonesia", "Japan", "Turkey", "France", "Germany", "South Korea", "Italy", "The UK", "Australia"],
    "Thailand" => ["Malaysia", "Indonesia", "South Korea", "Japan", "Turkey", "France", "Germany", "Italy", "The UK", "Australia"],
    "Indonesia" => ["Malaysia", "Thailand", "South Korea", "Turkey", "France", "Germany", "Italy", "The UK", "Japan", "Australia"]
];

$suggested_locations = $suggestions[$last_booking_location] ?? ["France", "Italy", "Germany", "South Korea", "Turkey", "Japan", "The UK", "Australia", "Malaysia", "Thailand", "Indonesia"]; 

// Merge the last booking location and recommended locations
$all_destinations = array_merge([$last_booking_location], $suggested_locations);
$all_destinations = array_unique($all_destinations);

// Connect to the second database (travel_package)
$conn_package = new mysqli($servername, $username, $password, $travel_package_db);
if ($conn_package->connect_error) {
    die("Connection failed to travel_package: " . $conn_package->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
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

<div class="heading" style="background: url(assets/package-head.jpg) no-repeat">
    <h1>packages</h1>
</div>

<section class="packages">
    <h1 class="heading-title">top destinations</h1>

    <div class="box-container">
        <?php
        foreach ($all_destinations as $location) {
            // Convert location to lowercase for case-insensitive comparison
            $location = strtolower($location);

            // Prepare SQL query to fetch package details
            $stmt = $conn_package->prepare("SELECT name, description, image_path FROM packages_data WHERE LOWER(name) = ? LIMIT 1");
            if (!$stmt) {
                echo "Error in preparing statement: " . $conn_package->error . "<br>";
                continue;
            }

            $stmt->bind_param("s", $location);
            $stmt->execute();
            $result_package = $stmt->get_result();

            if ($result_package->num_rows > 0) {
                while ($row = $result_package->fetch_assoc()) {
                    $name = $row['name'];
                    $description = $row['description'];
                    $image_path = $row['image_path'];
            
                    // Only prepend 'assets/' once to the image path
                    $img_path = "assets/" . $image_path;  // Only add 'assets/' once
            
                    // Debugging output: Check the final image path
                    echo "<script>console.log('Checking image path: " . $img_path . "');</script>";
            
                    // Check if the image exists
                    if (file_exists($img_path)) {
                        $img_src = $img_path;  // If image exists, use the image path
                        $image_exists_message = "'$img_path' exists.";
                    } else {
                        $img_src = "";  // Leave empty if the image doesn't exist
                        $image_exists_message = "'$img_path' does not exist.";
                    }
            
                    // Output the package box
                    echo "<div class='box'>
                            <div class='image'>
                                " . ($img_src ? "<img src='$img_src' alt='" . htmlspecialchars($name) . "' width='50%' />" : "<p>Image not available</p>") . "
                            </div>
                            <div class='content'>
                                <h3>" . htmlspecialchars($name) . "</h3>
                                <p>" . htmlspecialchars($description) . "</p>
                                <a href='book.php' class='btn'>book now</a>
                            </div>
                          </div>";
            
                    // Properly escape the PHP string for JavaScript
                    $escaped_message = addslashes($image_exists_message); // Escape special characters for JavaScript
                    echo "<script>console.log('$escaped_message');</script>";
                }
            }
            
                      
            
        }
        ?>
    </div>
</section>

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
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
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
    <div class="credit"> created by <span>Viator</span> | all rights reserved </div>
</section>

<script src="script.js"></script>
</body>
</html>
