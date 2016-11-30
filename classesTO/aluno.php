<?php
/**
 * Aluno do Instituto Federal de São Paulo - Boituva.
 *
 * @author Davi Aragão
 **/
class Aluno
{
	/**
	 * Nome do aluno.
	 *
	 * @var string
	 **/
	private $nome;

	/**
	 * Prontuario do aluno
	 *
	 * @var int
	 **/
	private $prontuario;

	/**
	 * Diz se o aluno é Nerd ou não.
	 *
	 * @var boolean
	 **/
	private $isNerd;

	/**
	 * Construtor
	 *
	 * @param string $nome - Nome do aluno.
	 * @param int $prontuario - Prontuário do aluno.
	 * @param boolean $isNerd - O aluno é nerd?
	 * @return void
	 * @author Davi Aragão
	 **/
	function __construct($nome, $prontuario, $isNerd)
	{
		$this->nome = $nome;
		$this->prontuario= $prontuario;
		$this->isNerd = $isNerd;
	}

	/**
	 * Retorna o prontuario do aluno.
	 *
	 * @param 
	 * @return int $this->prontuario.
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	public function getProntuario()
	{
		return $this->prontuario;
	}
}
