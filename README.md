# Examen Dentalia
El programa se escribió en PHP corriendo el servidor XAMPP en local host.
Estructura del folder donde se guardo el codigo.
C:\xampp\htdocs\md5\md5.php

¿Cómo funciona?

*Se calculan todas las combinaciones posible de dos caracteres alfanuméricos y especiales(".","@") con la función foreach().

*Al calcular el MD5 de cada combinación hará una comparación con todas las variables que tienen guardado el hash que se debe encontrar.
//operación para la regla de cifrado 
$valc=$ele1.$ele2;   //En la variable $valc se guardan las combinaciones
$valcm=md5($valc);       //se calcula la el MD5 de la combinación y se guarda en la variable $valcm
$valcm2=$valcm.$valc.$valcm; //se concatenan las variables para generar la regla de cifrado para que el paso posterior sea calcular el MD5 de la regla
$valcm3=md5($valcm2); //se calcula el MD5 de la regla de cifrado
//aquí termina la regla de cifrado

*Si se encuentra una comparación verdadera entre el hash calculado y el hash a encontrar se imprime la combinación y se guarda en una variable para que posteriormente se concatenen las combinaciones y se imprima el correo completo a encontrar.

//aquí empiezan las condiciones se calcula el MD5 de cada combinación posible, y si al comparar el hash calculado con la variable del hash a encontrar imprime cual fue la combinación con el mismo hash.
if ($comp1===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinación de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y coincide con el MD5 guardado: " ;  
echo $comp1;  
echo nl2br("\n");
$com1=$valc; //$com1 es la variable donde se guarda la combinación de caracteres que cumplió con la condición para posteriormente concatenarse e imprimir el correo completo

*Concatenación
$correo=$com1.$com2.$com3.$com4.$com5.$com6.$com7.$com8.$com9.$com10;
echo nl2br("\n");
echo nl2br("\n");

//se imprime la concatenación
echo "<div style=\"color:green;font-size:30px\">El correo encontrado es:  $correo</div>";
