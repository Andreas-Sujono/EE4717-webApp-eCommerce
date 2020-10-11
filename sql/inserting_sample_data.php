<?php
$servername = "localhost";
$username = "f32ee";
$password = "f32ee";
$dbname = "techWorld";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$password = 'test';
$password_hashed = password_hash($password, PASSWORD_DEFAULT);

/* comment necessary code below if you have run this cript before */
$sql = "INSERT INTO Account (username, password)
VALUES ('test', '$password_hashed');";

$sql .= "INSERT INTO CustomerDetails (accountId, fullName, email, phoneNumber, dateOfBirth)
VALUES ( (SELECT accountId from Account where username = 'test'), 'test', 'test@gmail.com', '83066382', '2000-08-01');";

$sql .= "INSERT INTO `Product` (name, price, category, rating, stock, description, image, bestSellingProduct)
VALUES ( 'Surface Laptop 3 - 13.5', 14480, 'laptop', 4.2, 100, 'Slim and stylish, available in 13.5” and 15” touchscreens and two durable finishes. Make a powerful statement and get improved speed, performance and all-day battery life.',
'https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa&q=90&m=6&h=270&w=270&b=%23FFFFFFFF&o=f&aim=true', 1);";

$sql .= "INSERT INTO `Product` (name, price, category, rating, stock, description, image, bestSellingProduct)
VALUES ( 'Apple iPhone 11 128GB | Apple warranty', 969, 'phone', 4.8, 50, 
'Display: 6.10-inch (828x1792)\n
Processor: Apple A13 Bionic\n
Front Camera: 12MP\n
Rear Camera: 12MP + 12MP\n
RAM: 4GB\n
Storage: 128GB\n
Battery Capacity: 3110mAh',
'https://cf.shopee.sg/file/48eca4f031793448433a0e0eda6c65cb', 1);";

$sql .= "INSERT INTO `Product` (name, price, category, rating, stock, description, image, bestSellingProduct)
VALUES ( 'Samsung Galaxy Tab A T295 8.0in 4G LTE', 180, 'tablet', 4.5, 20, 
'Lightweight and compact design fits perfectly in the palm of your hand,
Enjoy the wide 16:10 ratio display with a corner-to-corner view,
Parental Control lets you monitor usage and play time,
Family Group Sharing feature to instant sharing of photos, videos, events, notes and more,
2GB + 32GB (Additional memory of Up to 512GB)',
'https://cf.shopee.sg/file/9f551c2b7d66a5ff1388672e2a85b80d', 1);";

$sql .= "INSERT INTO `Product` (name, price, category, rating, stock, description, image, bestSellingProduct)
VALUES ( 'Apple AirPods Pro', 319, 'accessories', 4.2, 40, 
'Active noise cancellation,
Customised fit and seal,
Transparency mode,
Amazing sound quality with adaptive EQ,
Sweat and water resistant (IPX4)',
'https://www.singtel.com/content/dam/singtel/eshop/Mobile/Accessory/Apple/Headphones/381283700N-ffffff.jpg', 1);";



if (mysqli_multi_query($conn, $sql)) {
    echo "Database and tables are created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
