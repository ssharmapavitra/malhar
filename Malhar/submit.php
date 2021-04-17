<?php

  include("common.php");
     $name= $_POST['name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$branch= $_POST['branch']; 
$gender= $_POST['gender'];
$program = $_POST['program'];
$check_box= implode(",", $program);

$ig_id= $_POST['ig_id']; 
$chess_id= $_POST['chess_id'];

    $submit_query="INSERT INTO participants(name,email,contact,branch,gender,program,ig_id,chess_id) "
            . "values('$name','$email','$contact','$branch','$gender','$check_box', '$ig_id','$chess_id')";
$user_registration_submit= mysqli_query($con,$submit_query) or die(mysqli_error($con));
header('location:success.php');

