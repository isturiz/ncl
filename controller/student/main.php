<?php

require_once('../../model/connection.php');

$query = "SELECT * FROM estudiante";

$query = "SELECT estudiante.idEstudiante, estudiante.nombre AS nombre_estudiante, estudiante.apellido AS apellido_estudiante, estudiante.correo AS correo_estudiante, direccion, fechaNacimiento, categoriaEdad, estudiante.telefono AS telefono_estudiante, representante.nombre AS nombre_representante, representante.apellido AS apellido_representante, representante.correo AS correo_representante, representante.telefono AS telefono_representante, estudiante.Representante_idRepresentante AS idRepresentante
          FROM estudiante 
          JOIN representante 
          ON estudiante.Representante_idRepresentante = representante.idRepresentante
";

$student = mysqli_query($connection, $query);    


?>