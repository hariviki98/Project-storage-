<?php
    
    require 'conn.php';

    session_start();

    if(!isset($_SESSION['userid'])){
        echo "<script>alert('Please Login');</script>";
        echo "<script>window.location.assign('login/');</script>";
    }
?>

<html lang="en">
	<head>
        <meta charset="utf-8">
        
        <title>Home</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
    
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
        
        <div class="container">
            <div class="col-md-10 col-md-offset-1 head-tab">
                <button id="section1-button" class="col-md-4 active-tab">Cse - A</button>
                <button id="section2-button" class="col-md-4" style="border-left: none">Cse - B</button>
                <button id="section3-button"class="col-md-4" style="border-left: none">Cse - C</button>
            </div>
            <div id="section1" class="col-md-10 col-md-offset-1" style="display: block">
                <table class="table">
                    <thead>
                        <tr>
                            <td><b>Roll Number</b></td>
                            <td><b>Attendance</b></td>
                            <td><b>Assignment</b></td>
                            <td><b>Test Note</b></td>
                            <td><b>Tutorial</b></td>
                            <td><b>Observation</b></td>
                            <td><b>Record</b></td>
                            <td><b>No Due</b></td>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php
                            
                            $table = 'csea' . '-' . $_SESSION['sub'];
                            $query = "select * from `$table` order by `rollno`";
                            if($result = mysqli_query($con, $query)){
                                while($assoc = mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<td>'.$assoc['rollno'].'</td>';
                                    echo '<td>'.$assoc['attendance'].'</td>';
                                    if(!$assoc['assignment'])
                                        echo '<td><input class="cb assign" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['testnote'])
                                        echo '<td><input class="cb test" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['tutorial'])
                                        echo '<td><input class="cb tutorial" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['obsi'])
                                        echo '<td><input class="cb obsi" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['record'])
                                        echo '<td><input class="cb record" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['nodue'])
                                        echo '<td><input class="cb nodue" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    echo '</tr>';
                                }
                            }
                            else
                                die(mysqli_error($con));
                
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="section2" class="col-md-10 col-md-offset-1" style="display: none">
                <table class="table">
                    <thead>
                        <tr>
                            <td><b>Roll Number</b></td>
                            <td><b>Attendance</b></td>
                            <td><b>Assignment</b></td>
                            <td><b>Test Note</b></td>
                            <td><b>Tutorial</b></td>
                            <td><b>Observation</b></td>
                            <td><b>Record</b></td>
                            <td><b>No Due</b></td>
                        </tr>
                    </thead>
                    <tbody>
						
                        <?php
                            
                            $table = 'cseb' . '-' . $_SESSION['sub'];
                            $query = "select * from `$table` order by `rollno`";
                            if($result = mysqli_query($con, $query)){
                                while($assoc = mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<td>'.$assoc['rollno'].'</td>';
                                    echo '<td>'.$assoc['attendance'].'</td>';
                                    if(!$assoc['assignment'])
                                        echo '<td><input class="cb assign" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['testnote'])
                                        echo '<td><input class="cb test" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['tutorial'])
                                        echo '<td><input class="cb tutorial" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['obsi'])
                                        echo '<td><input class="cb obsi" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['record'])
                                        echo '<td><input class="cb record" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['nodue'])
                                        echo '<td><input class="cb nodue" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    echo '</tr>';
                                }
                            }
                            else
                                die(mysqli_error($con));
                
                        ?>
                    </tbody>
                </table>
            </div>
            <div id="section3" class="col-md-10 col-md-offset-1" style="display: none">
                <table class="table">
                    <thead>
                        <tr>
                            <td><b>Roll Number</b></td>
                            <td><b>Attendance</b></td>
                            <td><b>Assignment</b></td>
                            <td><b>Test Note</b></td>
                            <td><b>Tutorial</b></td>
                            <td><b>Observation</b></td>
                            <td><b>Record</b></td>
                            <td><b>No Due</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                            $table = 'csec' . '-' . $_SESSION['sub'];
                            $query = "select * from `$table` order by `rollno`";
                            if($result = mysqli_query($con, $query)){
                                while($assoc = mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<td>'.$assoc['rollno'].'</td>';
                                    echo '<td>'.$assoc['attendance'].'</td>';
                                    if(!$assoc['assignment'])
                                        echo '<td><input class="cb assign" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['testnote'])
                                        echo '<td><input class="cb test" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['tutorial'])
                                        echo '<td><input class="cb tutorial" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['obsi'])
                                        echo '<td><input class="cb obsi" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['record'])
                                        echo '<td><input class="cb record" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    if(!$assoc['nodue'])
                                        echo '<td><input class="cb nodue" type="checkbox"></td>';
                                    else
                                        echo '<td><i class="fa fa-check" aria-hidden="true"></i></td>';
                                    echo '</tr>';
                                }
                            }
                            else
                                die(mysqli_error($con));
                
                        ?>
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-10 col-md-offset-1">
                <button type="submit" class="btn btn-success right">Submit</button>
            </div>

        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            
            $('#logout').click(function() {
                
                if (confirm("Are you sure?") == true) {
                    window.location.assign("logout/");
                }

            });
            
        
        $(document).ready(function() {

            $('#section1-button').click(function () {
                $('#section1').css('display','block');
                $('#section1-button').addClass('active-tab');
                $('#section2').css('display','none');
                $('#section2-button').removeClass('active-tab');
                $('#section3').css('display','none');
                $('#section3-button').removeClass('active-tab');
            });
            $('#section2-button').click(function () {
                $('#section1').css('display','none');
                $('#section1-button').removeClass('active-tab');
                $('#section2').css('display','block');
                $('#section2-button').addClass('active-tab');
                $('#section3').css('display','none');
                $('#section3-button').removeClass('active-tab');
            });
            $('#section3-button').click(function () {
                $('#section1').css('display','none');
                $('#section1-button').removeClass('active-tab');
                $('#section2').css('display','none');
                $('#section2-button').removeClass('active-tab');
                $('#section3').css('display','block');
                $('#section3-button').addClass('active-tab');
            });

        });
            
        </script>
    </body>
</html>