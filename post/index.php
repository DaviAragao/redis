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
		$aluno = new Aluno('Davi Augusto Aragão', 1470108, true);
		$this->post->postAluno($aluno);
	}
}
