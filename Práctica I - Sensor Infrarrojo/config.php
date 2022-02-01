<?php
$conn = new mysqli("localhost", "root", "" , 'infra');

if ($conn->connect_errno) {
echo "Error: ". $conn->connect_error;
}