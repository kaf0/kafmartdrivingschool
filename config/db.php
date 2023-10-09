<?php
  
$servername = "localhost";
$username = "moeqbiig_kaf0";
$password = "@Doodleteam3";
$sitename = "Kafmart Driving School"; //site title

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, "moeqbiig_alxfinalproject");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
