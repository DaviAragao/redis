<?php
include_once 'genericTO.php';
/**
 * Aluno do Instituto Federal de São Paulo - Boituva.
 *
 * @author Davi Aragão
 **/
class Aluno extends GenericTO
{
	/**
	 * Nome do aluno.
	 *
	 * @var string
	 **/
	protected $nome;

	/**
	 * Prontuario do aluno
	 *
	 * @var int
	 **/
	public $prontuario;

	/**
	 * Diz se o aluno é Nerd ou não.
	 *
	 * @var boolean
	 **/
	protected $isNerd;

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
	 * Imprime o aluno.
	 *
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	public function printAluno()
	{
		$frase = ($this->isNerd) ? 'Esse cara é Nerd!' : 'Definitivamente esse cara não sabe nada!';
		echo "<p><strong>Nome: </strong>" . $this->nome . "</p>";
		echo "<p><strong>Prontuario: </strong>" . $this->prontuario . "</p>";
		echo "<p>" . $frase . "</p><hr>";
	}
}
