<?php
// Step 1: Connect to the database
require_once "settings.php";
$dbconn = @mysqli_connect($host, $user, $pwd, $sql_db);

// Step 2: Check connection
if (!$dbconn) {
    echo "<p>Unable to connect to the database.</p>";
    exit;
}

// Step 3: Create your SQL query
$query = "SELECT * FROM cars";

// Step 4: Execute your SQL query
$result = mysqli_query($dbconn, $query);

// Step 5: Display results in an HTML table
if ($result && mysqli_num_rows($result) > 0) {
    echo "<h2>Car Inventory</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>Car ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price ($)</th>
            <th>Year of Manufacture</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['car_id']}</td>
                <td>{$row['make']}</td>
                <td>{$row['model']}</td>
                <td>{$row['price']}</td>
                <td>{$row['yom']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p>No car records found.</p>";
}

// Step 6: Close connection
mysqli_close($dbconn);
?>