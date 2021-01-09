<?php
    $showError="false";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'dbconnect.php';

        $email=$_POST['loginEmail'];
        $pass=$_POST['loginPass'];
        // check whether this email exists
        $sql="select * from `users` where email_id='$email'";
        $result=mysqli_query($conn,$sql);
        $numRows=mysqli_num_rows($result);
        if($numRows==1){
            $row=mysqli_fetch_assoc($result);
                if($pass==$row['password']){
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['si']=$row['si'];
                    header("Location:/HigherGrad/index.php?loginsuccess=true");
                }
                else{
                    header("Location:/HigherGrad/index.php?loginsuccess=false");
                }
        }
        else{
            header("Location:/HigherGrad/index.php?loginsuccess=false");
        }
    }
?>