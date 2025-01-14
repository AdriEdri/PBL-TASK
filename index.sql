-- create database
CREATE DATABASE book_db;

-- use database
USE book_db;

-- create table
CREATE TABLE books_data (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    location VARCHAR(255) NOT NULL, 
    guests VARCHAR(255) NOT NULL,
    arrivals DATE NOT NULL,
    leaving DATE NOT NULL
);





-- create database package
CREATE DATABASE travel_package;

-- create table 
CREATE TABLE packages_data (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image_path VARCHAR(255) NOT NULL
);


-- use database
USE travel_package;

-- insert info
INSERT INTO `packages_data` (`id`, `name`, `description`, `image_path`) VALUES 
(1, 'France', 'A blend of art, wine, fashion, and iconic landmarks.', 'france.jpg'),
(2, 'Italy', 'A timeless fusion of history, art, architecture, and cuisine.', 'italy.jpg'),
(3, 'Germany', 'Rich in heritage, engineering excellence, castles, and scenic landscapes.', 'germany.jpg'),
(4, 'South Korea', 'Melding ancient traditions with modern tech, culture, and vibrant cuisine.', 'soko.jpg'),
(5, 'Turkey', 'A crossroads of civilizations, stunning landscapes, and diverse cultural influences.', 'turkey.jpg'),
(6, 'Japan', 'Innovative technology, serene temples, seasonal beauty, and unique traditions.', 'japan.jpg'),
(7, 'The UK', 'A fusion of history, royal landmarks, countryside, and modern culture.', 'tuk.jpg'),
(8, 'Australia', 'Pristine beaches, adventurous wildlife, a laid-back culture, and diverse landscapes.', 'au.jpg'),
(9, 'Malaysia', 'A melting pot of cultures, rainforests, beaches, and culinary delights.', 'malaysia.jpg'),
(10, 'Thailand', 'Tropical paradise known for its ancient temples, beaches, and food.', 'tl.jpg'),
(11, 'Indonesia', 'Thousands of islands offering lush jungles, vibrant culture, and serenity.', 'indon.jpg');
