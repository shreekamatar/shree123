<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
      body{
        margin:50px;
        background-color:#222;
        color:white;
        font-size: 25px;
      }
      </style>
<body>
<?php
    // define variables and set to empty values
    $fname = "";
    $lname = "";
    $email = "";
    $setpassword = "";
    $confirmpassword = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "shreek";
        $password = "shree@123";
        $dbname = "1stdb";
        $fname = test_input($_POST["fname"]);
        $lname = test_input($_POST["lname"]);
        $email = test_input($_POST["email"]);
        $setpassword = test_input($_POST["setpassword"]);
        $confirmpassword = test_input($_POST["confirmpassword"]);
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = ("INSERT INTO candidates (`firstname`, `lastname`, `email`, `setpassword`, `confirmpassword`) VALUES (?, ?, ?, ?, ?)");
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["setpassword"], $_POST["confirmpassword"] );
        $stmt->execute();
        header("location:index1.php");

        $stmt->close();
        $conn->close();

    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

 

}


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
<h2 style="text-align:center;font-size: 40px;">Registration Form</h2>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit ="return validateForm()" >  
   <fieldset style="width:50%;margin:auto;"> 
        First Name: <input type="text" name="fname" id="fname" class="form-control">
        <span id = "blankMsg" style="color:red"> </span> <br><br> 
        Last Name: <input type="text" name="lname" id="lname" class="form-control">
        <span id = "charMsg" style="color:red"> </span> <br><br>  
        E-mail: <input type="text" id="email" name="email" class="form-control"><br>
        Set Password: <input type="password" id="pswd1" name="setpassword" class="form-control">
        <span id = "message1" style="color:red"> </span> <br><br>  
        Confirm Password: <input type="password"  id="pswd2" name="confirmpassword" class="form-control">
        <span id = "message2" style="color:red"> </span> <br><br>  
        
       <input type="submit" name="submit" value="Submit"  class="btn btn-success btn-lg">
       <input type = "reset" value = "Reset" name="Reset" class="btn btn-primary btn-lg" >  
    </fieldset>  
    </form><br>

    <script>  
      function validateForm() {  
    //collect form data in JavaScript variables  
    var pw1 = document.getElementById("pswd1").value;  
    var pw2 = document.getElementById("pswd2").value;  
    var name1 = document.getElementById("fname").value;  
    var name2 = document.getElementById("lname").value; 
    var email = document.getElementById("email").value; 
      
    //check empty first name field  
    if(name1 == "") {  
      document.getElementById("blankMsg").innerHTML = "**Fill the first name";  
      return false;  
    }  
      
    //character data validation  
    if(!isNaN(name1)){  
      document.getElementById("blankMsg").innerHTML = "**Only characters are allowed";  
      return false;  
    }  
  
   //character data validation  
    if(!isNaN(name2)){  
      document.getElementById("charMsg").innerHTML = "**Only characters are allowed";  
      return false;  
    }   
    if (email == "") {
    $emailErr = "Email is required";
    return false;
   } 

    
    //check empty password field  
    if(pw1 == "") {  
      document.getElementById("message1").innerHTML = "**Fill the password please!";  
      return false;  
    }  
    
    //check empty confirm password field  
    if(pw2 == "") {  
      document.getElementById("message2").innerHTML = "**Enter the password please!";  
      return false;  
    }   
     
    //minimum password length validation  
    if(pw1.length < 8) {  
      document.getElementById("message1").innerHTML = "**Password length must be atleast 8 characters";  
      return false;  
    }  
  
    //maximum length of password validation  
    if(pw1.length > 15) {  
      document.getElementById("message1").innerHTML = "**Password length must not exceed 15 characters";  
      return false;  
    }  
    
    if(pw1 != pw2) {  
      document.getElementById("message2").innerHTML = "**Passwords are not same";  
      return false;  
    } else {  
      alert ("Your password created successfully");  
       
    }  
 }  
</script>  
   
</body>    
</html>