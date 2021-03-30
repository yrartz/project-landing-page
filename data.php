<?php

$conn = mysqli_connect('localhost', 'root', '', 'landing-page');

$data = mysqli_query($conn, "SELECT * FROM price");

$result = [];

while($row = mysqli_fetch_assoc($data)){
    $result[] = $row;
}
