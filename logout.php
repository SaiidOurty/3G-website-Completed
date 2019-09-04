<?php
session_start(); //to ensure you are using same session
session_destroy(); // destory the session
header("location:/index.php"); // redirects back to "index.php" after logging out
exit();
