<?php
if(isset($_POST["id"]))
{
    $booking_id = $_POST["id"];
    include 'db-config.php'; // loading db config file to connect
    mysqli_query($con, "DELETE from booking WHERE booking_id='$booking_id'")
    or die(mysqli_error($con));
    mysqli_close($con);
}
