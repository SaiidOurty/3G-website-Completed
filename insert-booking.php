<?php
include 'db-config.php'; // loading db config file to connect

if(isset($_POST["book"]))
{
    $title = $_POST['title'];
    $pitch_id = $_POST['pitch_id'];
    $user_id = $_POST['user_id'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];

    mysqli_query($con, "INSERT INTO booking(title, user_id, pitch_id, start_date, end_date, start_time, end_time)
VALUES('$title', '$user_id', '$pitch_id', '$start_date', '$end_date', '$start_time', '$end_time' );")
    or die(mysqli_error($con));
    mysqli_close($con);
    header("location: book-a-pitch.php"); //redirecting to the profile page once login is successful
}

