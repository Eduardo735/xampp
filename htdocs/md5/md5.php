<?php
echo "Eduardo Alpide Blancas, el correo a encontrar se imprime al final.";
echo nl2br("\n");
//arreglos con alfabeto en mayusculas y minusculas, numeros, "." y "@"
$arreglo1 = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 't', 'u', 'v', 'w', 'x', 'y', 'z', '@', '.', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 's');
$arreglo2= array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 't', 'u', 'v', 'w', 'x', 'y', 'z', '@', '.', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 's');
//combinacionnes de arreglos
foreach($arreglo1 as $ele1){
foreach($arreglo2 as $ele2){
//operacion para la regla de cifrado 
$valc=$ele1.$ele2;   //En la variable $valc se guardan las combinaciones
$valcm=md5($valc);       //se calcula la el MD5 de la combinacion y se guarda en la variable $valcm
$valcm2=$valcm.$valc.$valcm; //se concatenan las variables para generar la regla de cifrado para que el paso posterior sea calcular el MD5 de la regla
$valcm3=md5($valcm2); //se calcula el MD5 de la regla de cifrado
//aqui termina la regla de cifrado

//variables con los hash a comparar y encontrar
$comp1='1ee7b2c95024bf2a3a5b645676875f72';
$comp2='af97c725eca5ea2e7ae4a6b18dd9f608';
$comp3='aaf180b66f6282f65168c30c1c5e5466';
$comp4='0aaa8fb0c5b4fa52c0d06ed55d02fcc9';
$comp5='5e35b5a6a854db008cb8a677dfff030b';
$comp6='35306f43e19f6826a5df7937e71d228c';
$comp7='b2917b47913c83618903a4e564822836';
$comp8='34e4cf70388e9477677aa3013494ba1c';
$comp9='3d116007775d60a0d5781d2e35d747b5';
$comp10='dece2e0e3d79d272e40c8c66555f5525';

//aqui empiezan las condiciones se calcula el MD5 de cada combinacion posible, y si al comparar el hash calculado con la variable del hash a encontrar imprime cual fue la combinacion con el mismo hash.
if ($comp1===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp1;  
echo nl2br("\n");
$com1=$valc; //$com1 es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo

//para comparar el hash calculado contra el hash a encontrar
elseif ($comp2===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp2;  
echo nl2br("\n");
$com2=$valc; //$com2 es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo

//para comparar el hash calculado contra el hash a encontrar
elseif ($comp3===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp3;  
echo nl2br("\n");
$com3=$valc;   //$comX es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo

//para comparar el hash calculado contra el hash a encontrar
elseif ($comp4===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp4;  
echo nl2br("\n");
$com4=$valc;   //$comX es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo
 

//para comparar el hash calculado contra el hash a encontrar
elseif ($comp5===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp5;  
echo nl2br("\n");
$com5=$valc;    //$comX es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo

//para comparar el hash calculado contra el hash a encontrar
elseif ($comp6===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp6;  
echo nl2br("\n");
$com6=$valc;    //$comX es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo


//para comparar el hash calculado contra el hash a encontrar
elseif ($comp7===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp7;  
echo nl2br("\n");
$com7=$valc;    //$comX es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo


//para comparar el hash calculado contra el hash a encontrar
elseif ($comp8===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp8;  
echo nl2br("\n");
$com8=$valc;     //$comX es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo


//para comparar el hash calculado contra el hash a encontrar
elseif ($comp9===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp9;  
echo nl2br("\n");
$com9=$valc;    //$comX es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo


//para comparar el hash calculado contra el hash a encontrar
elseif ($comp10===$valcm3):
echo nl2br("\n"); 
echo "<div style=\"color:green;\">El MD5 de la combinacion de los dos caracteres  ($valc):</div>";
echo "MD5 de $valc " ; 
echo " es: " ; 
echo $valcm3;
echo "     y concide con el MD5 guardado: " ;  
echo $comp10;  
echo nl2br("\n");
$com10=$valc;    //$comX es la variable donde se guarda la combinacion de caracteres que cumplio con la condicion para posteriormente concatenarse e imprimir el correo completo


//si no puede comparar un hash se termina el programa
else:
endif;
}
}

//se hace la concatenacion de las variables guardadas en cada comparacion exitosa.
$correo=$com1.$com2.$com3.$com4.$com5.$com6.$com7.$com8.$com9.$com10;
echo nl2br("\n");
echo nl2br("\n");

//se imprime la concatenación
echo "<div style=\"color:green;font-size:30px\">El correo encontrado es:  $correo</div>";
?>

