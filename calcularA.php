<?php
     echo "La base y altura es: ";
     echo "Base: ".$_POST['base']."<br>";
     echo "Altura: ".$_POST['altura']."<br>" ;

     $suma= $_POST['base'] * $_POST['altura'];
     $Area = $suma / 2;

     echo "La Area del triangulo es: ".$Area;

?>