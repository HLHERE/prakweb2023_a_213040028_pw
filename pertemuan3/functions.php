<?php
$conn = mysqli_connect("localhost","root","", "prakweb_2023_a_213040028");


function query ($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}



?>