<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['user_name'];
        $telephone = $_POST['telephone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if($username == '' || $telephone == '' || $email == '' || $password == ''){
            echo 'please fill all values';
        }else{
            require_once('ConnectDB.php');
            $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            
            $check = mysqli_fetch_array(mysqli_query($con,$sql));
            
            if(isset($check)){
                echo 'username or email already exist';
            }else{              
                $sql = "INSERT INTO users (user_name,password,email,telephone) VALUES('$username','$password','$email','$telephone')";
                if(mysqli_query($con,$sql)){
                    echo 'successfully registered';
                }else{
                    echo 'oops! Please try again!';
                }
            }
            mysqli_close($con);
        }
    }else{
        echo 'error';
    }
?>
