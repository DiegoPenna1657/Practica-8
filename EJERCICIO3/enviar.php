<?php

echo 'Nombre ';echo $_POST['nombre'] ;echo '<BR>';

echo 'Direccion:'; echo $_POST['direccion'];echo '<BR> ';
echo 'Correo:'; echo $_POST['email1'];echo '<BR> ';
echo 'Contraseña confirmada ';echo $_POST['contra'];  echo '<BR> ';
echo 'Fecha de nacimiento:'; $_POST['fecha'];echo '<BR> ';
echo 'SEXO'; $_POST['sexo'];echo '<BR> ';
echo 'Intereses:';
$Aficion = $_POST['cbox1'];
$Aficion = $_POST['cbox2'];
$Aficion = $_POST['cbox3'];
$Aficion = $_POST['cbox4'];
$Aficion = $_POST['cbox5'];
if($cbox1){
    echo ' Ficcion <BR>';
}
if($cbox2){
    echo ' Accion <BR>';
}
if($cbox3){
    echo ' Suspenso <BR> ';
}
if($cbox4){
    echo ' Terror <BR>';
}
if($cbox5){
    echo ' Comedia <BR> ';
}

echo 'aficiones: '; $_POST['aficiones'];echo '<BR>';

?>
