<?php
 
    if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$email = $_POST['email'];
        $password = $_POST['password'];

        require_once('ConnectDB.php');
 
        $sql = "select * from users where email='$email' and password='$password'";
 
        $res = mysqli_query($con,$sql);
 
        $check = mysqli_fetch_array($res);
 
        if(isset($check)){
    	    echo 'Log in successfully';
        }else{
            echo 'Invalid email or password';
        }
 
        mysqli_close($con);
    }

