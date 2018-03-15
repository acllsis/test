<?php
class ClearPar{	

	private static $alph = array(  
								'(' => 0,
								')' => 1
						   );

	public static function build($cad){
		
		if(!empty($cad)){
			$estado = 0;
			$ncad = ''; 
			$i = 0;
			while ($i < strlen($cad)) {
				if (in_array($cad[$i], self::$alph)) {
					if ($estado == 0 && $cad[$i] == '(') {
						$ncad .= $cad[$i];
						$estado = 1;	
					}elseif ($estado == 1 && $cad[$i] == ')') {
						$ncad .= $cad[$i];
						$estado = 0;
					}				    
				}
				$i++;
			}
			if ((strlen($ncad)%2 != 0))
				$ncad = substr($ncad, 0, -1);
			
			return $ncad;
		}
		
	}
}

echo "Original: ()())()  -->  Salida: ".ClearPar::build("()())()");
echo '<br>';
echo "Original: ()(()  -->  Salida: ".ClearPar::build("()(()");
echo '<br>';
echo "Original: )(  -->  Salida: ".ClearPar::build(")(");
echo '<br>';
echo "Original: (()()()()(()))))())((()​)  -->  Salida: ".ClearPar::build("(()()()()(()))))())((()​)");
?> 