<?php

require_once('../../model/connection.php');

$query = "SELECT * FROM estudiante";
$student = mysqli_query($connection, $query);    


?>