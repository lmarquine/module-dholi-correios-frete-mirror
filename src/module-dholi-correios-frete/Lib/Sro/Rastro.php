<?php
/**
* 
* Frente com Correios para Magento 2
* 
* @category     Dholi
* @package      Modulo Frente com Correios
* @copyright    Copyright (c) 2019 dholi (https://www.dholi.dev)
* @version      1.0.0
* @license      https://www.dholi.dev/license/
*
*/
declare(strict_types=1);

namespace Dholi\CorreiosFrete\Lib\Sro;

class Rastro extends \SoapClient {

	/**
	 * @var array $classmap The defined classes
	 * @access private
	 */
	private static $classmap = array(
		'BuscaEventosLista' => '\Dholi\CorreiosFrete\Lib\Sro\BuscaEventosLista',
		'BuscaEventosListaResponse' => '\Dholi\CorreiosFrete\Lib\Sro\BuscaEventosListaResponse',
		'Sroxml' => '\Dholi\CorreiosFrete\Lib\Sro\Sroxml',
		'Objeto' => '\Dholi\CorreiosFrete\Lib\Sro\Objeto',
		'Eventos' => '\Dholi\CorreiosFrete\Lib\Sro\Eventos',
		'Destinos' => '\Dholi\CorreiosFrete\Lib\Sro\Destinos',
		'EnderecoMobile' => '\Dholi\CorreiosFrete\Lib\Sro\EnderecoMobile',
		'BuscaEventos' => '\Dholi\CorreiosFrete\Lib\Sro\BuscaEventos',
		'BuscaEventosResponse' => '\Dholi\CorreiosFrete\Lib\Sro\BuscaEventosResponse');

	/**
	 * @param array $options A array of config values
	 * @param string $wsdl The wsdl file to use
	 * @access public
	 */
	public function __construct(array $options = array(), $wsdl = 'http://webservice.correios.com.br/service/rastro/Rastro.wsdl') {
		foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}

		parent::__construct($wsdl, $options);
	}

	/**
	 * @param BuscaEventos $parameters
	 * @access public
	 * @return BuscaEventosResponse
	 */
	public function buscaEventos(BuscaEventos $parameters) {
		return $this->__soapCall('buscaEventos', array($parameters));
	}

	/**
	 * @param BuscaEventosLista $parameters
	 * @access public
	 * @return BuscaEventosListaResponse
	 */
	public function buscaEventosLista(BuscaEventosLista $parameters) {
		return $this->__soapCall('buscaEventosLista', array($parameters));
	}

}
