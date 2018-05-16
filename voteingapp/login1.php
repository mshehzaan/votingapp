<?php
session_start();
include 'connect.php';
$username=$_POST['name'];
$password=$_POST['password'];
$query="select * from login where name=\"$username\"";
$result=mysqli_query($dbh,$query) or die("error querying");
if(mysqli_num_rows($result)!=1){

 echo "you are not welcome";
return;
}
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
if($row['password']==$password)
{
if($row['type']==0)
{
$_SESSION['sec']=$row['section'];
$_SESSION['id']=$row['id'];
header('Location:vote.html');
}
else
{
header('location:admin.php');
}
}
else
echo "you are not welcome";
}
?>
