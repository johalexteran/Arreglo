
<?php

$trabajo = array($nombre = $_POST['nombre'] => 'Nombre',$ape = $_POST['ape'] => 'Apellido',$cedula = $_POST['cedula'] => 'C.I',
$dep = $_POST['dep'] => 'Departamento',$lt= $_POST['lt'] => 'Lugar de Trabajo',$pago= $_POST['pago'] => 'Sueldo');

$trabajo2 = array($nombre2 = $_POST['nombre2'] =>'Nombre',$ape2 = $_POST['ape2'] => 'Apellido',$cedula2 = $_POST['cedula2'] => 'C.I',
$dep2 = $_POST['dep2'] => 'Departamento',$lt2 = $_POST['lt2'] => 'Lugar de Trabajo',$pago2 = $_POST['pago2'] => 'Sueldo');


$trabajo3 = array($nombre3 = $_POST['nombre3'] => 'Nombre',$ape3 = $_POST['ape3'] => 'Apellido',$cedula3 = $_POST['cedula3'] => 'C.I',
$dep3 = $_POST['dep3'] => 'Departamento',$lt3 = $_POST['lt3'] => 'Lugar de Trabajo',$pago3 = $_POST['pago3'] =>'Sueldo');


if (!empty($nombre) && !empty($nombre2) && !empty($nombre3)
 && !empty($ape) && !empty($ape2) && !empty($ape3)
 && !empty($cedula) && !empty($cedula2) && !empty($cedula3)
 && !empty($pago) && !empty($pago2) && !empty($pago3)
 && !empty($dep) && !empty($dep2) && !empty($dep3)){



  echo "_______________________________________";
  echo "<br>";
  echo" Empleado 1";


  echo "<br>";
foreach ($trabajo as $dato => $emple) {

  echo "<br>";
  echo $emple . " : " .$dato ;

}
  echo "$";
  echo "<br>";
  echo "_______________________________________";
  echo "<br>";
  echo" Empleado 2";


  echo "<br>";
foreach ($trabajo2 as $dato2 => $emple2) {
  echo "<br>";
  echo  $emple2 . " : " .$dato2;

}
  echo "$";
  echo "<br>";
  echo "_______________________________________";
  echo "<br>";
  echo" Empleado 3";


  echo "<br>";
foreach ($trabajo3 as $dato3 => $emple3) {
    echo "<br>";
    echo  $emple3 . " : " .$dato3;

}

  echo "$";
  echo "<br>";
  echo "_______________________________________";
  echo "<br>";

}else {
    echo "Debe llenar todos los campos...";
}
?>

