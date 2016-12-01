<?php
/**
 * Classe para salvar as inforações no banco de dados redis.
 *
 * @author Davi Aragão
 **/
class Post
{
	/**
	 * Armazena o objeto da conexão com o banco de dados.
	 *
	 * @var Redis
	 **/
	private $redis;

	/**
	 * Construtor
	 *
	 * @param 
	 * @return void
	 * @author Davi Aragão
	 **/
	function __construct()
	{
		$conn = new RedisConnection('serverswm.ddns.net');
		$this->redis = $conn->getRedis();
	}

	/**
	 * Salva um aluno na base de dados redis.
	 *
	 * @param Aluno $aluno = O aluno a ser salvo no banco.
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	public function postAluno($aluno)
	{
		//$this->redis->delete('aluno:' . $aluno->prontuario);
		//print_r($aluno->thisToArray());
		$this->redis->hMSet('aluno:' . $aluno->prontuario, $aluno->thisToArray());
	}
}
