<html> 
<head>
    <title>Records of Ngos</title>
</head>
<body>
<table border="3px">
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>ContactNumber</th>
            <th>UserID</th>
           
</tr>
</body>
<?php
error_reporting(0);
include('ngo2_reg.php');
$query="select * from ngo";
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
        <td>".$result['Address']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['ContactNumber']."</td>
        <td>".$result['UserID']."</td>
       
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