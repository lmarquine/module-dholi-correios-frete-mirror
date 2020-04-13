<?php
/**
* 
* Frente com Correios para Magento 2
* 
* @category     Dholi
* @package      Modulo Frente com Correios
* @copyright    Copyright (c) 2020 dholi (https://www.dholi.dev)
* @version      1.0.1
* @license      https://www.dholi.dev/license/
*
*/
declare(strict_types=1);

namespace Dholi\CorreiosFrete\Lib\CalcPrecoPrazo;

class CalcPrecoPrazo {

	public $nCdEmpresa = null;

	public $sDsSenha = null;

	public $nCdServico = null;

	public $sCepOrigem = null;

	public $sCepDestino = null;

	public $nVlPeso = null;

	public $nCdFormato = null;

	public $nVlComprimento = null;

	public $nVlAltura = null;

	public $nVlLargura = null;

	public $nVlDiametro = null;

	public $sCdMaoPropria = null;

	public $nVlValorDeclarado = null;

	public $sCdAvisoRecebimento = null;

	public function __construct($nCdEmpresa = null, $sDsSenha = null, $nCdServico = null, $sCepOrigem = null, $sCepDestino = null, $nVlPeso = null, $nCdFormato = null, $nVlComprimento = null, $nVlAltura = null, $nVlLargura = null, $nVlDiametro = null, $sCdMaoPropria = null, $nVlValorDeclarado = null, $sCdAvisoRecebimento = null) {
		$this->nCdEmpresa = $nCdEmpresa;
		$this->sDsSenha = $sDsSenha;
		$this->nCdServico = $nCdServico;
		$this->sCepOrigem = $sCepOrigem;
		$this->sCepDestino = $sCepDestino;
		$this->nVlPeso = $nVlPeso;
		$this->nCdFormato = $nCdFormato;
		$this->nVlComprimento = $nVlComprimento;
		$this->nVlAltura = $nVlAltura;
		$this->nVlLargura = $nVlLargura;
		$this->nVlDiametro = $nVlDiametro;
		$this->sCdMaoPropria = $sCdMaoPropria;
		$this->nVlValorDeclarado = $nVlValorDeclarado;
		$this->sCdAvisoRecebimento = $sCdAvisoRecebimento;
	}

}
