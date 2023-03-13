<?php

require_once('../../model/connection.php');

$idStudent    = $_POST['idStudent'];

$firstName      = $_POST['firstName'];
$lastName       = $_POST['lastName'];
$email          = $_POST['email'];
$address        = $_POST['address'];
$birthdate      = $_POST['birthdate'];
$phone          = $_POST['phone'];
$ageCategory    = $_POST['ageCategory'];
$representative = $_POST['representativeID'];


$query = "UPDATE estudiante SET nombre = '$firstName', apellido = '$lastName', correo = '$email', direccion = '$address', fechaNacimiento = '$birthdate', telefono = '$phone', categoriaEdad = '$ageCategory', Representante_idRepresentante = '$representative' WHERE idEstudiante = $idStudent";
mysqli_query($connection, $query);

header("location: ../../view/student/main.php");