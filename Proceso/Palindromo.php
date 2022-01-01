<?php 
	//file_get_contents('php://input')
	class Palindromo 
	{
		private $Palabra;
		
		function __construct($palabra)
		{
			$this->palabra=$palabra;
		}


		public function Palindromo()
		{

			$palabraArry=str_split($this->palabra);
			$longitudPalabarArry=count($palabraArry);
			$j=$longitudPalabarArry-1;
			$bandera=false;
			for ($i=0; $i < $longitudPalabarArry; $i++) {
				if($i === $j){
					break;
				}
				if($palabraArry[$i] == $palabraArry[$j]){
					
					$bandera=true;
				}else{
					$bandera=false;
				}
				$j--;
			}
			echo json_encode($bandera);
			
		}
	}
	
	$content = trim(file_get_contents("php://input"));
	
	$decoded = json_decode($content, true);
	
	$palabra = new Palindromo(strtolower($decoded["texto"]));

	//$palabra = new Palindromo("reconocer");
	$palabra->Palindromo();

?>