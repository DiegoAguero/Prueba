
<?php

$host = "localhost";

$user = "root";

$conexion = mysqli_connect($host, $user, "", "escuela");

if(!$conexion){

    echo "Error al conectar con la base de datos</br>";

}

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$dni = $_GET['dni'];
$genero = $_GET['genero'];
$categoria = $_GET['Categoria'];
$fecha_nacimiento = $_GET['nacimiento'];
$fecha_milla = $_GET['milla'];

$fecha_nac = new DateTime($fecha_nacimiento);
$fecha_mill = new DateTime($fecha_milla);

$edad = DATE_DIFF($fecha_nac, $fecha_mill);

$fecha_nac = $fecha_nac->format('Y/m/d');
$fecha_mill = $fecha_mill->format('Y/m/d');


$EE = $edad->format('%Y');

# aca van los ifs


$alta="insert into competidores (Codigo, Nombre, Apellido, DNI, Genero, Fecha_Nac, Fecha_Comp, Edad, Categoria, Tiempo) values(
'default', '$nombre', '$apellido', '$dni', '$genero', '$fecha_nac', '$fecha_mill',  '$EE',  '$categoria', '00:00:00');";
$resultado=mysqli_query($conexion ,$alta) or die ("</br>Problemas al insertar: ".mysqli_error($conexion));

echo "Datos enviados correctamente. Gracias por registrarse.";?><html> <button><a href = "consultass.php">Ver anotados</a></button> </html>
