<?php
/**
 * Classe para recuperar as informações salvas no redis.
 *
 * @author Davi Aragão
 **/
class Get
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
	 * Retorna o aluno com o $prontuario.
	 *
	 * @param int $prontuario - Prontuario do aluno desejado.
	 * @return Aluno $aluno.
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	public function getAluno($prontuario)
	{
		$aluno = '';
		print_r($this->redis->hGetAll('aluno:' . $prontuario));
		return $aluno;
	}
}
