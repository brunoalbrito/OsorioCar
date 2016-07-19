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

	function __construct($modelo, $ano, $marca, $placa)
	{
		$this->modelo = $modelo;
		$this->ano = $ano;
		$this->marca = $marca;
		$this->placa = $placa;
	}
}

?>