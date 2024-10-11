<?php
$con = new mysqli("localhost", "root", "", "bd_tienda");
if ($con->connect_error) {
    die("Error: " . $con->connect_error);
}
