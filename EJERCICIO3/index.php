<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html><head></head><body>
<form method="post" action="enviar.php">
<table style="text-align: left; width: 100%;" cellpadding="3" rules="rows">
<tbody>
 <tr>
 <td>Nombre:</td>
 <td><input type="text" name="nombre" id="nombre" /></td>
 </tr>
 <tr>
 <td>Direccion:</td>
 <td><input type="text" name="direccion" id="direccion" /></td>
 </tr>
 <tr>
 <td>Correo Electronico:</td>
 <td><input type="text" name="email1" id="email1" /></td>
 </tr>

 <tr>
 <td>Contraseña:</td>
 <td><input type="text" name="contra1" id="contra1" /></td>
 </tr>

<tr>
 <td>Repita Contraseña:</td>
 <td><input type="text" name="contra2" id="contra2" /></td>
 </tr>

<tr>
 <td>Ingrese su fecha de nacimiento </td>
 <td><input type="date" id="fecha" name="fecha"></td>
 </tr>

 <tr>
 <td>SEXO</td>
 <td><select name="sexo" id="sexo">
 <option selected="selected"></option>
 <option>HOMBRE</option>
 <option>MUJER</option>
 </select></td>
 </tr>

 <tr>
 <td>Elija sus intereses </td>
 <td><label><input type="checkbox" id="cbox1" value="Ficcion"> Ficcion</label><br>
<input type="checkbox" id="cbox2" value="Accion"> <label for="cbox2">Accion</label>
    <input type="checkbox" id="cbox3" value="Suspenso"> <label for="cbox3">Suspenso</label>
     <input type="checkbox" id="cbox4" value="Terror"> <label for="cbox4">Terror</label>
     <input type="checkbox" id="cbox5" value="Comedia"> <label for="cbox5">Comedia</label>
     </td>
 </tr>
 <tr>
 <td colspan="2">Escriba sus aficiones</td>
 </tr>
 <tr>
 <td class="centrado" colspan="2">
 <textarea cols="50" rows="5" name="aficiones"></textarea></td>
 </tr>
 <tr>
 <td class="centrado" colspan="2"><input type="submit" value="Enviar" />
 <input type="reset" value="Restablecer" /></td>
 </tr>
 </tbody>
</table>
</form>
</body></html>