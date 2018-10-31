<?php
 function GeraTabela($resultado) {
                $numeroDeLinhas = count($resultado);
                $numeroDeColunas = count($resultado[0]);
                echo "<table border=1>
                   <table border=1>";
                for ($i = 0; $i < $numeroDeLinhas; $i++) {
                    echo "</tr>";
                    echo "<tr>";
                    for ($j = 0; $j < $numeroDeColunas; $j++) {
                        echo "<td> " . $resultado[$i][$j] . "</td>";
                    }
                }

                echo "<br>";
            }
            
$matriz1 = array
    (
                array(1, 2, 5),
                array(4, 2, 1),
                array(7, 9, 7)
            );

$matriz2 = array
   (
                array(7, 1, 9),
                array(5, 6, 7),
                array(0, 0, 1)
            );

function SomaMatriz($matriz1, $matriz2) {
               $copia = $matriz1;
                for ($i = 0; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                       $copia[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];    
                        }
                    }
                
                return $copia;
                
        }
            
            $result = SomaMatriz($matriz1, $matriz2);
             GeraTabela($result);
            