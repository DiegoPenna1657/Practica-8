<?php
function calculaedad($fechanacimiento){
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($dia_diferencia < 0 || $mes_diferencia < 0)
    $ano_diferencia--;
  return $ano_diferencia;
}

    If(calculaedad( $_POST['fecha'])>=18)
    {
        echo "Usted es mayor de edad por lo que "; echo $_POST['nombre']; echo " debe hacer pago de precio completo de 1250.0 $";
    }
    elseif(calculaedad( $_POST['fecha'])<18 && calculaedad( $_POST['fecha'])>2 )
    {
        echo "El niño reguistrado "; echo $_POST['nombre']; echo " debe hacer pago de precio en reduccion a 15% lo que seria 937.5 $";
    }
    elseif(calculaedad( $_POST['fecha'])>0 && calculaedad( $_POST['fecha'])<=2 )
    {
        echo "El bebe reguistrado "; echo $_POST['nombre']; echo "no hace pago de ningun cargo";
    }

?>
