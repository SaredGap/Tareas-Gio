
<?php
$conn = new mysqli("localhost", "root", "" , 'Practica');

if ($conn->connect_errno) {
echo "Error: ". $conn->connect_error;
}