<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
       <script src="https://kit.fontawesome.com/92908cbc21.js" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
        margin:50px;
        font-size: 30px;
        color:white;
        background-color: white;
    }
    body {
            margin: 0;
            padding: 0;
            height: 100vh;
            
        }

        #login #login-box {
            margin-top: 80px;
            max-width: 400px;
            height: 350px;
            border: 1px solid #9C9C9C;
            background-color: #f8c000;
            border-radius: 20px;
        }

        #login #login-box #login-form {
            padding: 20px;
        }

        #login #login-box #login-form #register-link {
            margin-top: 1px;
        }

        .label {
            color: #2a0a5e;
        }

        .btn-warning {
            background-color: #2a0a5e;
            color: #f8c000;
        }

        .btn-warning:hover {
            background-color: #2a0a5e;
            color: #f8c000;
        }

        .card {
            position: relative;
            top: 25%;
            right:75%;

        }
    </style>
<body>
    <div id="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                  
                </div>
<div class="col-md-4">
                <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            <p style="color:black"><i class="fa fa-right-to-bracket"></i> Login</p>
                        </div>
                        <div class="card-body">
   <form method="post" action="photograpy.php" id="login-form" class="form">      
   <div class="form-group">
   <label for="email" class="form-label">User Name</label><br>   
         <div class="input-group">
            <div class="input-group-text"><i class="fa fa-user"></i></div>
            <input type="text" name="email" id="email" class="form-control"><br>
            </div>
              </div>
        <div class="form-group">
        <label for="psd" class="form-label">Password</label><br>
         <div class="input-group">
          <div class="input-group-text"><i class="fa fa-lock"></i></div>
        <input type="password" name="setpassword" id="psd" class="form-control"></div><br>
       <input type="submit" name="submit" value="Submit"  class="btn btn-primary btn-lg">
       <p><a href = "register.php" style= "text-decoration:none;font-size:18px;">New Candidates Register Here</a></p>
       <p  style= "text-decoration:none;font-size:15px;color:black;">Already Have Account?Login Here</p>
        </div>
    </form><br>


</body>    
</html>
