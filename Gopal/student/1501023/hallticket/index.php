<?php
    
    require '../../../conn.php';

    session_start();

    if(!isset($_SESSION['userid'])){
        echo "<script>alert('Please Login');</script>";
        echo "<script>window.location.assign('../../login/');</script>";
    }
?>

<html lang="en">
	<head>
        <meta charset="utf-8">
        
        <title>No Due Status</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../style.css">
    
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                
                <ul class="nav navbar-nav">
                    <li><a href="../"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li id="logout"><a><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>    
                </ul>
                
            </div>
        </nav>
        
        <div class="col-md-6 col-md-offset-3">
        <center>
            <img src="http://www.srec.ac.in/lib/images/log-srec.jpg">
            <h3>Hall Ticket [ NOV 2017 ]</h3><br>
        </center>
        <div style="padding:15px;font-size: 18px;">Roll No: 1501023 </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>S.No</td>
                    <td>Date</td>
                    <td>Subject</td>
                    <td>Session</td>
                </tr>
            </thead>
            <tbody>
                    <script>
                        sub = ['Discrete Structures','Principles of Compiler Design','Artificial Intelligence','Embedded Architecture','Computer Graphics','Software Engineering','PCD Lab','Embedded Lab','Graphics Lab'];
                        for (var i = 1; i <10; i++) {
                            document.write('<tr>\n' +
                                '                    <td>'+i+'</td>\n' +
                                '                    <td>'+(i+5)+'.11.2017</td>\n' +
                                '                    <td>'+sub[i-1]+'</td>\n' +
                                '                    <td>FN</td>\n' +
                                '                </tr>');
                        }
                    </script>

            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-3 col-md-offset-1" style="margin-bottom: 100px;">Signature Of Student</div>
        <div class="col-md-3 col-md-offset-1">Signature Of Tutor</div>
        <div class="col-md-3 col-md-offset-1">Signature Of HOD</div>
    </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            
            $('#logout').click(function() {
                
                if (confirm("Are you sure?") == true) {
                    window.location.assign("../../../logout/");
                }

            });
            
        </script>
    </body>
</html>