<html><head><title>Admin Login</title>   
<style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #022E8A;
			
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin {
            margin-bottom: 10px;
         }
         
         .form-signin {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
         h1{
            text-align: center;
            color: #fff;
         }
      </style>
      
   </head>
	
   <body>
<center><h1>Gray Fish Admin Panel</h1> 
	  <br><img src="https://i.ibb.co/PmH73X4/index.png" style="width:200px;"></center><br>
<div class = "container">
<form class ="form-signin" role="form" action="dashboard.php" method="post">
            <h4><center><font style="color:white;"><b>Note:</b> Admin Panel accept only correct<br> username and password.</font></center></h4>
<center><input size="30px" type="text" class="form-control" name="username" placeholder="username" required autofocus></center>
<center><input size="30px" type="password" class="form-control" name="password" placeholder="password" required autofocus></center><br>
<center><button style="border:7px solid #000;width:120px;height:50px;" type ="submit" name="login"><b>Login</b></button></center>
         </form>
			
         
         
      </div> 
      
   </body>
</html>