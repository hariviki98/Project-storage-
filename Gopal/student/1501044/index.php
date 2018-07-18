<?php
    
    require '../../conn.php';

    session_start();

    if(!isset($_SESSION['userid'])){
        echo "<script>alert('Please Login');</script>";
        echo "<script>window.location.assign('../login/');</script>";
    }
?>

<html lang="en">
	<head>
        <meta charset="utf-8">
        
        <title>No Due Status</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../style.css">
    
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                
                <ul class="nav navbar-nav">
                    <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li id="logout"><a><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>    
                </ul>
                
            </div>
        </nav>
        
        
            <div class="col-md-10 col-md-offset-1">
            <center><h2>NO DUE FORM [1501044]</h2></center><br>
            <table class="table">
                <thead>
                    <tr>
                        <td>S.No</td>
                        <td>Subject</td>
                        <td>Attendance</td>
                        <td>Assignment</td>
                        <td>Test Note</td>
                        <td>Tutorials</td>
                        <td>Observation</td>
                        <td>Record</td>
                        <td>No Due</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Discrete Structures</td>
                        <td>93.4</td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td>-</td>
                        <td>-</td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Principle of Compiler Design</td>
                        <td>93.4</td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td>-</td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Artificial Intelligence</td>
                        <td>93.4</td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Embedded Architecture</td>
                        <td>93.4</td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Software Engineering</td>
                        <td>93.4</td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Computer Graphics</td>
                        <td>93.4</td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                        <td>-</td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><i class="fa fa-check" aria-hidden="true"></i></td>
                        <td><input type="checkbox" onclick="return false;"/></td>
                    </tr>

                </tbody>
            </table>
            <a class="col-md-offset-10 btn btn-info" style="display:none;">Print Form</a>
        </div>


        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            
            $('#logout').click(function() {
                
                if (confirm("Are you sure?") == true) {
                    window.location.assign("../../logout/");
                }

            });
            
        </script>
    </body>
</html>