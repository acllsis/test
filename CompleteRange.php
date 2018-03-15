<?php
class CompleteRange{	
	
	public static function build($cad){
		$newcad = '';
		if(!empty($cad)){
			$tam = count($cad);
			if ($tam != 0){
				$inicio = $cad[0];
				$fin = $cad[$tam-1];
				$newcad = '[';
				$i = 0;
				$rango = $fin - $inicio;			
				foreach (range($inicio, $fin) as $número) {					
				    $newcad .= $número;
				    if ($i < $rango)
				    	$newcad .=', ';
				    $i++;
				}
				$newcad .= ']';
				return $newcad;
			}
		}
		
	}
}

echo "Original: [1, 2, 4, 5]  -->  Salida: ".CompleteRange::build([1, 2, 4, 5]);
echo '<br>';
echo "Original: [2,4,9]  -->  Salida: ".CompleteRange::build([2,4,9]);
echo '<br>';
echo "Original: [55,58,60]  -->  Salida: ".CompleteRange::build([55,58,60]);
?> 