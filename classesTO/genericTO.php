<?php
/**
 * Classe genérica para todos os TO's.
 *
 * @author Casa Publicadora Brasileira - Davi Aragão
 **/
class GenericTO
{
	/**
	 * Construtor
	 *
	 * @param param
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	function __construct()
	{
	}

	/**
	 * Converte o objeto para um array.
	 *
	 * @return array - Array associativo com os atributos do método.
	 * @author Davi Aragão
	 **/
	public function thisToArray()
	{
		return call_user_func('get_object_vars', $this);
	}
}
