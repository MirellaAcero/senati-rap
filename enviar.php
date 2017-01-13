<?php

/**
 * @author Kat
 * @copyright 20116
 */

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$ciudad = $_POST["ciudad"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$status = $_POST["status"];
$administracion = $_POST["administracion"];
$agroindustria = $_POST["agroindustria"];
$artesgraficas = $_POST["artesgraficas"];
$confecciones = $_POST["confecciones"];
$electrotecnia = $_POST["electrotecnia"];
$hoteleria = $_POST["hoteleria"];
$alimentaria = $_POST["alimentaria"];
$informatica = $_POST["informatica"];
$joyeria = $_POST["joyeria"];
$mecanica = $_POST["mecanica"];
$metalmecanica = $_POST["metalmecanica"];
$ambiental = $_POST["ambiental"];
$textil = $_POST["textil"];
$mensaje = $_POST["mensaje"];
$acepto = $_POST["acepto"];

$cuerpo = '

Información del solicitante:<br><br>
<B>NOMBRES: </B> = '. $nombre .' <br>
<B>APELLIDOS:</B> = '.$apellido.' <br>
<B>DNI:</B> = '.$dni.' <br>
<B>DEPARTAMENTO:</B> = '.$ciudad.' <br>
<B>CELULAR/FIJO:</B> = '.$telefono.' <br>
<B>EMAIL:</B> = '.$email.' <br>
<B>ESPECIALIDAD:</B> = '.$status.' <br>
<B>CARRERA:</B> = '.$administracion.' '.$agroindustria.' '.$artesgraficas.' '.$confecciones.' '.$electrotecnia.' '.$hoteleria.' '.$alimentaria.' '.$informatica.' '.$joyeria.' '.$mecanica.' '.$metalmecanica.' '.$ambiental.' '.$textil.' <br>
<B>MENSAJE:</B> = '.$mensaje.' <br>
<B>ACEPTA LOS TERMINOS Y CONDICIONES:</B> = '.$acepto.' <br>';

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