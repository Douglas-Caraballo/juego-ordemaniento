<?php

$palabras= array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");


$form= '<form action="analisis.php">';

for($i=0; $i<count($palabras); $i++){
    $form.= 'La Palabra: '.str_shuffle($palabras[$i]).' '.
    '<input type="text" name="palabra'.$i.'">'.
    '<br>';
}
$button= '<input type="submit" value="enviar">';
$formCierre= '</form>';

echo $form.$button.$formCierre;
?>

