<?php

/**
 * @author Kat
 * @copyright 20116
 */

$nombre2 = $_POST["nombre2"];
$apellido2 = $_POST["apellido2"];
$dni2 = $_POST["dni2"];
$ciudad2 = $_POST["ciudad2"];
$telefono2 = $_POST["telefono2"];
$email2 = $_POST["email2"];
$status2 = $_POST["status2"];
$administracion2 = $_POST["administracion2"];
$agroindustria2 = $_POST["agroindustria2"];
$artesgraficas2 = $_POST["artesgraficas2"];
$confecciones2 = $_POST["confecciones2"];
$electrotecnia2 = $_POST["electrotecnia2"];
$hoteleria2 = $_POST["hoteleria2"];
$alimentaria2 = $_POST["alimentaria2"];
$informatica2 = $_POST["informatica2"];
$joyeria2 = $_POST["joyeria2"];
$mecanica2 = $_POST["mecanica2"];
$metalmecanica2 = $_POST["metalmecanica2"];
$ambiental2 = $_POST["ambiental2"];
$textil2 = $_POST["textil2"];
$mensaje2 = $_POST["mensaje2"];
$acepto2 = $_POST["acepto2"];

$cuerpo = '

Información del solicitante:<br><br>
<B>NOMBRES: </B> = '. $nombre2 .' <br>
<B>APELLIDOS:</B> = '.$apellido2.' <br>
<B>DNI:</B> = '.$dni2.' <br>
<B>DEPARTAMENTO:</B> = '.$ciudad2.' <br>
<B>CELULAR/FIJO:</B> = '.$telefono2.' <br>
<B>EMAIL:</B> = '.$email2.' <br>
<B>ESPECIALIDAD:</B> = '.$status2.' <br>
<B>CARRERA:</B> = '.$administracion2.' '.$agroindustria2.' '.$artesgraficas2.' '.$confecciones2.' '.$electrotecnia2.' '.$hoteleria2.' '.$alimentaria2.' '.$informatica2.' '.$joyeria2.' '.$mecanica2.' '.$metalmecanica2.' '.$ambiental2.' '.$textil2.' <br>
<B>MENSAJE:</B> = '.$mensaje2.' <br>
<B>ACEPTA LOS TERMINOS Y CONDICIONES:</B> = '.$acepto2.' <br>';

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\n"; 
$headers .= "Content-type: text/html; charset=utf-8\n"; 
$headers .= "From: <$email>"; 
//dirección del remitente 
//$headers .= "From: <$mail>"; 

$destinatario = "katty.lizarbe@somark.pe";

mail($destinatario, "FORMULARIO DEL LANDING SENATI-SEDES", $cuerpo, $headers);
?>

<html>
<script language="javascript">
document.location.href="respuesta.html";
</script>
<body>
</body>
</html>