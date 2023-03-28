<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <title>College Registration details</title>
<body>
</html>

  <div class="container">
    <div class="title">College Registration</div>
    <div class="content">
      <form  method="POST" action="clg2_reg.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details"><i class="fa-solid fa-user"> </i>  Volunteer Name </i> </span>
            <input type="text" placeholder="  Enter your name"  name="Name" required>
            </div>
          <div class="input-box">
            <span class="details"><i class="fa-solid fa-envelope"> </i>  Email </i></span>
            <input type="email" placeholder="  Enter your email" name="email" required>
        </div>
        <div class="input-box">
            <span class="details"><i class="fa-solid fa-phone"></i> Phone Number</span>
            <input type="phone" placeholder="  Enter your 10 digit mobile number" name="mob" required maxlength="10">
        </div>
        <div class="input-box">
            <span class="details"><i class="fa-solid fa-location-dot"></i>  Address</span>
            <input type="text" placeholder="  Enter your address" name="address" required>
        </div>
            <div class="input-box">
              <span class="details"><i class="fa-regular fa-user"></i>  Username</span>
              <input type="text" placeholder="  Enter your Username" name="username" required>
            </div>
            <div class="input-box">
                <span class="details"><i class="fa-solid fa-lock"></i>  Password</span>
                <input type="password" placeholder="  Enter your password" name="password" required>
              </div>
          </div>
           <div class="button">
              <input type="submit" value="Register" name="register">
           </div>            
           </div>
      </form>
    </div>
  </div>
  
</body>
</html>