<?php
include 'a.php';
if(isset($_POST['register']))
{
    $name = $_POST['fn'];
    $Address1 = $_POST['address'];
    $email = $_POST['email'];
    $contact = $_POST['mob'];
    
    $username=$_POST['username'];
    $password=$_POST['password'];





     $sql="INSERT INTO ngo (Name,Address,Email,ContactNumber,UserID,Password)
     VALUES ('$name','$Address1','$email','$contact','$username', '$password') ";
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