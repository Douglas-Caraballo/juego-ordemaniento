<?php
$palabras= array("sol", "luna", "cielo", "luz", "estrellas", "lluvia");

for($i=0; $i<count($palabras); $i++){
    if($_REQUEST["palabra".$i]==$palabras[$i]){
        echo "La palabra es correcta".'<br>';
    }else{
        echo "la palabra ingresada es erronea, la palabra es: ".$palabras[$i]."<br>";
    }
}