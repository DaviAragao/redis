<?php
include_once '../config/config.php';
include_once 'post.php';
new IndexPost();
/**
 * Controla a adição de novas entradas no banco de dados redis.
 *
 * @author Davi Aragão
 **/
class IndexPost
{
	/**
	 * Armazena um novo objeto para fazer um post.
	 *
	 * @var Post
	 **/
	private $post;

	/**
	 * Construtor
	 *
	 * @param 
	 * @return void
	 * @author Davi Aragão
	 **/
	function __construct()
	{
		$this->post = new Post();
		$this->postAluno();
	}

	/**
	 * Salva um aluno com o método em post.php.
	 *
	 * @param 
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	private function postAluno()
	{
		$alunoDavi = new Aluno('Davi Augusto Aragão', 1470108, 1);
		$alunoLucas = new Aluno('Lucas Monari', 123456, 1);
		$alunoBill = new Aluno('Bill Gates', 0000, 0);
		$this->post->postAluno($alunoDavi);
		$this->post->postAluno($alunoLucas);
		$this->post->postAluno($alunoBill);
	}
}
