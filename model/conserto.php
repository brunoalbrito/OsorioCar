<?php 
/**
* Concerto
*/
class Conserto
{
	public $data = null;
	public $valorPecas = null;
	public $pecasUtilizadas = null;
	public $descricao = null;
	public $valorMaodeObra = null;
	public $valorTotal = null;
	
	function __construct($data,$valorPecas,$pecasUtilizadas,$descricao,$valorMaodeObra)
	{
		$this->data = $data;
		$this->valorPecas = $valorPecas;
		$this->pecasUtilizadas = $pecasUtilizadas;
		$this->descricao = $descricao;
		$this->valorMaodeObra = $valorMaodeObra;
		$this->valorTotal = Conserto::calcularValorTotal($this->valorPecas,$this->valorMaodeObra);
	}

	public static function calcularValorTotal($valorPecas,$valorMaodeObra){
		return ($valorPecas + $valorMaodeObra);
	}
}

?>