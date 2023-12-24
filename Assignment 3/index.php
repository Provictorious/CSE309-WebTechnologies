<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <a href="display.php" class="button-link">Click here to view Submissions</a>



    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/631fc7d278.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="login_stuff">

    
    <div class ="login_image">
     
    </div>
    <div class ="login_content">
    <h2>Contact Us</h2>
    <form action="loginSys.php" method="post">
    
    
   
    
    <label>Full Name : </label>
    <i class="fa-regular fa-user" style="color: #510882;"></i><input type="text" name="user_name" id="userName" placeholder="Full Name"> </input>
   
    <label>  Contact Number: </label>
    <i class="fa-solid fa-address-book" style="color: #6d0783;"></i><input type="text" name="contactNo" id="cont" placeholder="Contact Number" ></input>

    <label> Email Address  : </label>
    <i class="fa-regular fa-envelope" style="color: #630c63;"></i></i><input type="text" name="email" id="mail" placeholder="Email Address" ></input>
    <label> Message   : </label>
    <i class="fa-solid fa-message" style="color: #610e61;"></i><input type="text" name="message" id="mess" placeholder="Your Message" ></input>
     
     </div>
        <button type="submit" class="button" name ="submit">Submit Here</button>
</div>
  
</body>

