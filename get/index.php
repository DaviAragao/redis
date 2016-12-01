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
		$this->getAllMysql();
		$this->getAllRedis();
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
		$this->get->getAluno(1470108)->printAluno();
		$this->get->getAluno(123456)->printAluno();
		$this->get->getAluno(0000)->printAluno();
	}

	/**
	 * Exibe todo o conteudo a partir de getAllMysql em Get.
	 *
	 * @param 
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	private function getAllMysql()
	{
		$this->get->getAllMysql();
	}

	/**
	 * Exibe todas as informações de teste do redis para avaliar performace.
	 *
	 * @param 
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	private function getAllRedis()
	{
		$this->get->getAllRedis();
	}
}
