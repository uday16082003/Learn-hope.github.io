<html> 
<head>
    <title>Records of Others</title>
</head>
<body>
    <table border="3px">
        <tr>
            <th>Name</th>
            <th>MobileNo</th>
            <th>Email</th>
            <th>Location</th>
            <th>Username</th>
           
</tr>
</body>
<?php
error_reporting(0);
include('clg2_reg.php');
$query="select * from others";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


// echo $result['FullName']."   ".$result['Email']."   ".$result['NumberofPeopleincommunity']."   ".$result['PhoneNumber']."   ".$result['CommunityID'].
// "   ".$result['Username'];

// echo $total;
if($total!=0){
    // $result=mysqli_fetch_assoc($data);
    while($result=mysqli_fetch_assoc($data))
    {
        echo"
        <tr>
        <td>".$result['Name']."</td>
        <td>".$result['MobileNo']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Location']."</td>
        <td>".$result['Username']."</td>
       
        </tr>";
    }
    
}
else{
    echo"NO reccords ";

}

?>
</table>
</body>
</html>