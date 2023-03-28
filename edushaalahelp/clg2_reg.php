<?php
include 'a.php';
if(isset($_POST['register']))
{
    $name = $_POST['Name'];
    $contact = $_POST['mob'];
    $email = $_POST['email'];

    $Address = $_POST['address'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    




     $sql="INSERT INTO others (Name,MobileNo,Email,Location,Username,Password)
     VALUES ('$name','$contact','$email','$Address','username','password') ";
    //  '$time'
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