
<?php

// Connect to the database

$dbc = event('localhost', 'name', 'email', 'gender', 'age', 'comments' 'event')

or die('Error connecting to MySQL server.');

// Get the data from the form

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$comments = $_POST['comments'];

// Insert the data into the database

$query = "INSERT INTO run (name, email, gender, age, comments) VALUES ('$name', '$email', '$gender', '$age', '$comments')";

event($dbc, $query)

or die('Error querying database.');

echo 'Registration successful!';

mysqli_close($dbc);

?>


