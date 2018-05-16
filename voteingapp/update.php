<?php
session_start();
include 'connect.php';
$name = $_GET['q'];

$query = "update candia set votecount=votecount+1 where id=\"$name\"";
mysqli_query($dbh,$query) or die("Error updating the vote");
$i=$_SESSION['id'];
$query="update login set voted=1 where id=\"$i\"";
mysqli_query($dbh,$query) or die("Error query");

?>
