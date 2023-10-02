
<center><?php
 
 function sumarNumerosPares($numeros) {
     $suma = 0;
     foreach ($numeros as $numero) {
         if ($numero % 2 == 0) {
             $suma += $numero;
         }
     }
     return $suma;
 }
 
    $numeros = array(1, 2, 3, 4, 5,24, 6);
    $resultado = sumarNumerosPares($numeros);
    
    echo "<table style='border: solid 2px red;'>";
    echo "<tr><th>Números</th></tr>";
    
    for ($i = 0; $i < count($numeros); $i++) {
        echo "<tr><td style='border: solid 2px aquamarine;'>" . $numeros[$i] . "</td></tr>";
    }
    
    echo "</table>";
    
    echo "<br> " . $resultado;
 

?></center>