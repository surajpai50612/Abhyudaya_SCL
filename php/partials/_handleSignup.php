<?php
    $showError="false";
    $showAlert=false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'dbconnect.php';

        $fname=$_POST['signupFname'];
        $lname=$_POST['signupLname'];
        $user_email=$_POST['signupEmail'];
        $user_phno=$_POST['signupPhno'];
        $user_password=$_POST['signuppassword'];
        $user_cpassword=$_POST['signupcpassword'];

        // check whether this email exists
        $exitSql="select * from `users` where email_id='$user_email'";
        $result=mysqli_query($conn,$exitSql);
        $numRows=mysqli_num_rows($result);

        if($numRows){
            $showError="Already an account with same mail exists.";
        }
        else{
            if($user_password==$user_cpassword){ 					
                $sql="INSERT INTO `users` (`first_name`, `last_name`, `email_id`, `phone_number`, `password`, `timestramp`) VALUES ('$fname', '$lname', '$user_email', '$user_phno', '$user_password', current_timestamp());";
                $result=mysqli_query($conn,$sql);
                if($result){
                    $showAlert=true;
                    header("Location:/HigherGrad/index.php?signupsuccess=true");
                    exit();
                }
            }
            else{
                $showError="Password donot match";
            }
        }
        header("Location:/HigherGrad?signupsuccess=false&error=$showError");

    }
?>