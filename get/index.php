<?php
include_once '../config/config.php';
include_once 'get.php';
new IndexGet();
/**
 * Controla as requisoções por novas informações as redis.
 *
 * @author Davi Aragão
 **/
class IndexGet
{
	/**
	 * Armazena uma instância da classe get.php.
	 *
	 * @var Get
	 **/
	private $get;

	/**
	 * Construtor
	 *
	 * @param 
	 * @return void
	 * @author Davi Aragão
	 **/
	function __construct()
	{
		$this->get = new Get();
		$this->getAluno();
	}

	/**
	 * Exibe o aluno a partir de getAluno($prontuario) da classe Get.
	 *
	 * @param 
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	private function getAluno()
	{
		print_r($this->get->getAluno(1470108));
	}
}
