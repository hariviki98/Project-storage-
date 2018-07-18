<?php

	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'nodues';
	
    if(!$con = mysqli_connect($host,$username,$password))
        die('Could not connect to the server');
    else{
        if(!$dbcon = mysqli_select_db($con, $db))
            die('Could not connect to the database');
    }
?>