<?php
class ChangeString{	

	private static $alph = array(  'a' => 'b', 'b' => 'c', 'c' => 'd', 'd' => 'e',
							'e' => 'f',	'f' => 'g',	'g' => 'h',	'h' => 'i',
							'i' => 'j',	'j' => 'k',	'k' => 'l',	'l' => 'm',
							'm' => 'n',	'n' => 'ñ',	'ñ' => 'o',	'o' => 'p',
							'p' => 'q',	'q' => 'r',	'r' => 's',	's' => 't',
							't' => 'u',	'u' => 'v',	'v' => 'w',	'w' => 'x',
							'x' => 'y',	'y' => 'z',	'z' => 'a',	'A' => 'B',
							'B' => 'C',	'C' => 'D',	'D' => 'E',	'E' => 'F',
							'F' => 'G',	'G' => 'H',	'H' => 'I',	'I' => 'J',
							'J' => 'K',	'K' => 'L',	'L' => 'M',	'M' => 'N',
							'N' => 'Ñ',	'Ñ' => 'O',	'O' => 'P',	'P' => 'Q',
							'Q' => 'R',	'R' => 'S',	'S' => 'T',	'T' => 'U',
							'U' => 'V',	'V' => 'W',	'W' => 'X',	'X' => 'Y',
							'Y' => 'Z',	'Z' => 'A'
					);

	public static function build($cad){
		
		if(!empty($cad)){
			$ncad = ''; 
			$i = 0;
			while ($i < strlen($cad)) {
				if (in_array($cad[$i], self::$alph)) {
				    $ncad .= self::$alph[$cad[$i]];
				}else{
					$ncad .= $cad[$i];
				}
				$i++;
			}
			return $ncad;
		}
		
	}
}

echo "Original: 123 abcd*3  -->  Salida: ".ChangeString::build("123 abcd*3");
echo '<br>';
echo "Original: **Casa 52  -->  Salida: ".ChangeString::build("**Casa 52");
echo '<br>';
echo "Original: **Casa 52Z  -->  Salida: ".ChangeString::build("**Casa 52Z");
?> 