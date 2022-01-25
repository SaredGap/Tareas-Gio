
<?php
$conn = new mysqli("localhost", "root", "" , 'Practicas');

if ($conn->connect_errno) {
echo "Error: ". $conn->connect_error;
}