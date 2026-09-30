<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_Ibarreta_Ara');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>