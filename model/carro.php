<?php 
/**
* Classe carro
*/
class Carro
{
	public $modelo = null; 
	public $ano = null;
	public $marca = null;
	public $placa = null;

	public function __construct($modelo, $ano, $marca, $placa)
	{
		if ($modelo != null) {
			$this->modelo = $modelo;
			$this->ano = $ano;
			$this->marca = $marca;
			$this->placa = $placa;
		}else{
			$this->placa = $placa;
		}
	}
}

?>