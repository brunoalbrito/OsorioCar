<?php 
/**
* Concerto
*/
class Conserto
{
	public $idcarro = null;
	public $data = null;
	public $valorPecas = null;
	public $pecasUtilizadas = null;
	public $descricao = null;
	public $valorMaodeObra = null;
	public $valorTotal = null;
	
	function __construct($idcarro,$data,$valorPecas,$pecasUtilizadas,$descricao,$valorMaodeObra)
	{
		$this->idcarro = $idcarro;
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