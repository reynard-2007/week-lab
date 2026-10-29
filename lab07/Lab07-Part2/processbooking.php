<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Booking confirmation">
	<meta name="keywords" content="MiddleEarth, Tours, Rohan">
	<meta name="author" content="Yuki">
	<title>Booking Confirmation</title>
</head>
<body>
<h1>Rohirrim Tour Booking Confirmation</h1>
<?php
	// Read a text field safely: returns "" if missing, escaped otherwise
	function field($name) {
		if (isset($_POST[$name])) {
			return htmlspecialchars(trim($_POST[$name]));
		}
		return "";
	}

	$firstname = field("firstname");
	$lastname  = field("lastname");
	$age       = field("age");
	$species   = field("species");
	$food      = field("food");
	$bookday   = field("bookday");
	$partysize = field("partysize");

	$speciesNames = array("M" => "Human", "D" => "Dwarf", "E" => "Elf", "H" => "Hobbit");
	if (isset($speciesNames[$species])) {
		$species = $speciesNames[$species];
	}

	$bookings = array();
	if (isset($_POST["accom"])) { $bookings[] = "Accommodation"; }
	if (isset($_POST["4day"]))  { $bookings[] = "4 Day Tour"; }
	if (isset($_POST["10day"])) { $bookings[] = "10 Day Tour"; }

	echo "<p>Welcome $firstname $lastname</p>";
	echo "<p>Age: $age</p>";
	echo "<p>Species: $species</p>";

	if (count($bookings) > 0) {
		echo "<p>Booking: ", implode(", ", $bookings), "</p>";
	} else {
		echo "<p>Booking: none selected</p>";
	}

	echo "<p>Menu preference: $food</p>";
	echo "<p>Date: $bookday</p>";
	echo "<p>Number of travellers: $partysize</p>";
?>


</body>
</html>