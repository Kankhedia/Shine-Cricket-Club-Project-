<?php
  session_start();
   $db = mysqli_connect('localhost', 'root', '', 'registration');

  $clubname = '';
  $estdate = '';
  $Regno = '';
  $location = '';
  $state = '';
  $city = '';
  $district = '';
  $pincode = '';
  


  if(isset($_POST['club-reg-button'])){
    $clubname = mysqli_real_escape_string($db, $_POST['clubname']);
    $estdate = mysqli_real_escape_string($db, $_POST['estdate']);
    $Regno = mysqli_real_escape_string($db, $_POST['Reg no ']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $city  = mysqli_real_escape_string($db, $_POST['city']);
    $district = mysqli_real_escape_string($db, $_POST['district']);
    $pincode = mysqli_real_escape_string($db, $_POST['pincode']);
    

       $sql = "INSERT INTO clubreg (clubname, estdate, Regno , location, state, city , district, pincode) VALUES ('$clubname', '$estdate', '$Regno ', '$location', '$state', '$city', '$district', '$pincode')";
      mysqli_query($db, $sql);

  }
 ?>
