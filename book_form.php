<?php

    $connection = mysqli_connect('localhost', 'root', '', 'book_db');

    if(isset($_POST['send'])){
        // Sanitize the input to prevent XSS or invalid data
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phone = mysqli_real_escape_string($connection, $_POST['phone']);
        $address = mysqli_real_escape_string($connection, $_POST['address']);
        $location = mysqli_real_escape_string($connection, $_POST['location']);
        $guests = mysqli_real_escape_string($connection, $_POST['guests']);
        $arrivals = mysqli_real_escape_string($connection, $_POST['arrivals']);
        $leaving = mysqli_real_escape_string($connection, $_POST['leaving']);

        // Use prepared statements to avoid SQL injection
        $stmt = $connection->prepare("INSERT INTO books_data (name, email, phone, address, location, guests, arrivals, leaving) 
                                      VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

        $stmt->execute();
        $stmt->close();

        header('Location: book.php');
    } else {
        echo 'Something went wrong. Please try again.';
    }
?>
