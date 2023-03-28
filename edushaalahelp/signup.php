<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <div class="center">
      <h1>Sign Up As</h1>
      <form method="post">
        <div class="role-details" id="role">
          <br>
          <input type="radio" name="role" value="Community" id="dot1">
            <label for="dot1">Community</label>

          <input type="radio" name="role" value="NGO" id="dot2">
          <label for="dot2">NGO</label>

          <input type="radio" name="role" value="College Society" id="dot3">
          <label for="dot3">College Society</label>

        </div>

          <div><br></div>
          <div class="button">
            <button id="button">Next</button>
          </div>

          <div><br></div>
      </form>
    </div>
 </body>
 <script>

    let button=document.getElementById('button');
    let divrole=document.getElementById('role');
    let input1=document.getElementById('dot1');
    let input2=document.getElementById('dot2');
    let input3=document.getElementById('dot3');


    button.addEventListener('click',(e)=>{
        e.preventDefault();
        if(input1.checked){
            console.log("Community is checked");
            window.open("Community_reg.php");
        }

         else if (input2.checked) {
            console.log("NGO is checked");
            window.open("ngo_reg.php");
            
        }

       else if (input3.checked) {
            console.log("others is checked");
            window.open("clg_reg.php");
        }

        else {
            alert("Please select the option ");
        }
        
    })

   
 


 </script>
</html>