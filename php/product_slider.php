<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$active = true; // To set the first slide as active

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<div class="carousel-item ';
        echo $active ? 'active' : '';
        echo '">';
        echo '<img src="' . $row['image'] . '" class="d-block w-100" alt="' . $row['name'] . '">';
        echo '<div class="carousel-caption d-none d-md-block">';
        echo '<h5>' . $row['name'] . '</h5>';
        echo '<p>$' . $row['price'] . '</p>';
        echo '<a href="#" class="btn btn-primary">Add Review</a>';
        echo '</div>';
        echo '</div>';
        $active = false;
    }
} else {
    echo "0 results";
}
$conn->close();
?>
