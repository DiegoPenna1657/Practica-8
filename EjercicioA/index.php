<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title></title>
</head>
<body>
 <FORM METHOD="post" ACTION="calculo.php">
 <input type="hidden" name="edad" value="30">
 <p>Tu nombre <input type="text" name="nombre" size="30" ></p>
 <p>¿Cual es tu sexo?</p>
 <blockquote>
 <p>Hombre<input type="radio" value="hombre" checked name="sexo"></p>
 <p>Mujer <input type="radio" name="sexo" value="mujer"></p>
 </blockquote>

 <p>Ingrese su fecha de nacimiento </p>
 <p><input type="date" id="fecha" name="fecha"></p>
 <p>Algun tipo de enfermadad cronica</p>
 <p><textarea rows="5" name="enfermadad" cols="28"></textarea></p>
 

 <p><input type="submit" value="Enviar datos" name="enviar">
 <input type="reset" value="Restablecer" name="B2"></p>
 </FORM>
</body>
</html>
