<?php
    if(!isset($_POST['submit']))
{
  $username=$_POST['Username'];
  $password=$_POST['password'];
$conn=mysqli_connect("sql302.infinityfree.com","if0_34542682","EHUWQLsks58UjN","if0_34542682_login");
$sql="SELECT * from login_data WHERE username='$username' AND password='$password' ";
$result=mysqli_query($conn,$sql);
$resultchek=mysqli_num_rows($result);
if($resultchek>0)
{
  header('Location: ../home/book1.html');
}
else
{
echo "login failed";
 }
}

?>
