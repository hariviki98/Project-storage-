<?php

    session_start();
    
    if(isset($_SESSION['userid'])){
        unset($_SESSION['userid']);
        echo "<script>window.location.assign('../login/');</script>";
    }
    else{
        echo "<script>alert('Please Login');</script>";
        echo "<script>window.location.assign('../login/');</script>";
    }

?>