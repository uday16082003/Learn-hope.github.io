<?php
include 'a.php';
if(isset($_POST['register']))
{
    $name = $_POST['fn'];
    $Address1 = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['mob'];
    $noofpeoples=$_POST['nopeople'];
    $communityid=$_POST['id'];
    $username=$_POST['username'];
    $password=$_POST['password'];





     $sql="INSERT INTO community (FullName,Address,Email,PhoneNumber,NumberofPeopleincommunity,CommunityID,Username,Password)
     VALUES ('$name','$Address1','$email','$contact','$noofpeoples','communityid','$username', '$password') ";
    if(mysqli_query($conn,$sql))
    {
        echo"<script>alert('new record inserted')</script>";
    }
    else
   {
        echo "error:" . mysqli_errno($conn);
     }
}
?>