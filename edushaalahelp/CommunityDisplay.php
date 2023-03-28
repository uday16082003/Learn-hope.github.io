<html> 
<head>
    <title>Records of Community</title>
</head>
<body>
    <table border="3px">
        <tr>
            <th>FullName</th>
            <th>Email</th>
            <th>NumberofPeopleincommunity</th>
            <th>PhoneNumber</th>
            <th>CommunityID</th>
            <th>Username</th>
</tr>
</body>
<?php
error_reporting(0);
include('Community2_reg.php');
$query="select * from community";
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
        <td>".$result['FullName']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['NumberofPeopleincommunity']."</td>
        <td>".$result['PhoneNumber']."</td>
        <td>".$result['CommunityID']."</td>
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