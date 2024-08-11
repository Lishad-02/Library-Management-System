<?php
session_start(); // Start the session

// Check if user is logged in, if not redirect to login page
if(!isset($_SESSION['id'])){
    header("Location: user_dashboard.php");
    exit();
}

// Establish database connection
$connection = mysqli_connect("localhost", "root", "", "lmsdatabase");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the ID of the logged-in user from the session
$user_id = $_SESSION['id'];

// Query to fetch details of the logged-in user based on ID
$query = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($connection, $query);

// Display user details
if (mysqli_num_rows($result) > 0) {
    echo "<h2>User Details:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No user found with ID: $user_id";
}

// Close connection
mysqli_close($connection);
?>
