<?php
// Database connection
$connect = new PDO('mysql:host=localhost;dbname=db_threeg', 'root', '');

$data = array();
$query = "SELECT * FROM booking ORDER BY booking_id";

$statement = $connect->prepare($query);
$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
    $data[] = array(
        'id'   => $row["booking_id"],
        'title'   => $row["title"] . ' - ' . substr($row["start_time"], 0, -3) . ' to ' . substr($row["end_time"], 0, -3) ,
        'start'   => $row["start_date"],
        'end'   => $row["end_date"],
        'start_time'  => $row["start_time"],
        'end_time'  => $row["end_time"]
    );
}

echo json_encode($data); // will return as {"id":"1","title":"Team 1 vs Team 2",
//"start":"2019-03-30","end":"2019-03-31"}

