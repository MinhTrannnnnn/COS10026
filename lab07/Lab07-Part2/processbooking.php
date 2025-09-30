<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Confirmation</title>
</head>
<body>
  <h1>Rohirrim Tour Booking Confirmation</h1>

  <?php
  // Check if the form was submitted using POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // A simple function to clean user input
    function clean($data) {
      $data = trim($data);              // Remove extra spaces
      $data = stripslashes($data);      // Remove backslashes
      $data = htmlspecialchars($data);  // Convert special characters to safe HTML
      return $data;
    }

    // Get and clean each form field
    $firstname = clean($_POST['firstname']);
    $lastname  = clean($_POST['lastname']);
    $age       = clean($_POST['age']);
    $species   = clean($_POST['species']);
    $food      = clean($_POST['food']);
    $bookday   = clean($_POST['bookday']);
    $partysize = clean($_POST['partysize']);

    // Check which tours were selected
    $tours = []; // Create an empty list
    if (isset($_POST['accom'])) $tours[] = "Accommodation";
    if (isset($_POST['4day']))  $tours[] = "Four-day tour";
    if (isset($_POST['10day'])) $tours[] = "Ten-day tour";

    // Convert species code to full name
    $speciesNames = [
      "M" => "Human",
      "D" => "Dwarf",
      "E" => "Elf",
      "W" => "Wizzard",
    ];
    $speciesFull = $speciesNames[$species];

    // Show the booking details
    echo "<p><strong>Name:</strong> $firstname $lastname</p>";
    echo "<p><strong>Species:</strong> $speciesFull</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Meal Preference:</strong> $food</p>";
    echo "<p><strong>Booking Date:</strong> $bookday</p>";
    echo "<p><strong>Number of Travellers:</strong> $partysize</p>";

    // Show selected tours
    echo "<p><strong>Selected Tours:</strong></p>";
    if (count($tours) > 0) {
      echo "<ul>";
      foreach ($tours as $tour) {
        echo "<li>$tour</li>";
      }
      echo "</ul>";
    } else {
      echo "<p>No tours selected.</p>";
    }

  } else {
    // If the form wasn't submitted properly
    echo "<p>No booking information received.</p>";
  }
  ?>
</body>
</html>