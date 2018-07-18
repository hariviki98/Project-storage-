<?php

    require '../conn.php';

    session_start();

    if(isset($_SESSION['userid'])){
        echo "<script>alert('Already Logged In');</script>";
        echo "<script>window.location.assign('../');</script>";
    }

    if(isset($_POST['userid'])){
        $uid = $_POST['userid'];
        $pass = $_POST['password'];
        $query = "select * from users where userid='$uid'";
        if($result = mysqli_query($con, $query)){
            $arr = mysqli_fetch_array($result);
            if($pass == $arr[4]){
                $_SESSION['userid'] = $uid;
                $_SESSION['type'] = $arr[2];
                if($_SESSION['type'] == 'staff'){
                    $_SESSION['sub'] = $arr[3];
                    echo "<script>window.location.assign('../');</script>";    
                }
                else
                    echo "<script>window.location.assign('../student/$uid');</script>";                
            }
        }
    }
    /*if(isset($_POST['rollno'])){
        $roll = $_POST['rollno'];
        $pass = $_POST['pass'];
        $query = "select * from users where userid='$roll'";
        if($result = mysqli_query($con, $query)){
            $arr = mysqli_fetch_array($result);
            if($pass == $arr[3]){
                $_SESSION['userid'] = $uid;
                $_SESSION['sub'] = $arr[2];
                echo "<script>window.location.assign('../');</script>";
            }
        }
    }*/

?>

<html lang="en">
	<head>
        <meta charset="utf-8">
        
        <title>Login</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
    
    </head>
    <body style="background-color: black;">
        <div class="col-md-4 col-md-offset-2 main-container" >
            <div class="container-fluid">
                <div class="loginform">
                    <div class="col-md-12 head-login">
                        <h2>Staff Login</h2>
                    </div>
                    <form action="" method="post">
                        <center>
                            <div class="col-md-12">
                                <input class="user-login col-md-10" name="userid" type="text" placeholder="User ID" required>
                                <input class="user-password col-md-10" name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="user-submit btn btn-info">Log In</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 main-container" >
            <div class="container-fluid">
                <div class="loginform">
                    <div class="col-md-12 head-login">
                        <h2>Student Login</h2>
                    </div>
                    <form action="" method="post">
                        <center>
                            <div class="col-md-12">
                                <input class="user-login col-md-10" name="userid" type="text" placeholder="Roll No" required>
                                <input class="user-password col-md-10" name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="user-submit btn btn-info">Log In</button>
                            </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>