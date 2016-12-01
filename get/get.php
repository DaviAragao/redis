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
	 * Armazena o objeto da conexão com o banco de dados MySQL.
	 *
	 * @var PDO
	 **/
	private $mysql;

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
		$conn = new MysqlConnection("redis", "root", "pontoall1", "serverswm.ddns.net");
		$this->mysql = $conn->getMysql();
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
		//print_r($this->redis->hGetAll('aluno:' . $prontuario));
		$aluno = new Aluno(
			$this->redis->hGet('aluno:' . $prontuario, 'nome'),
			$this->redis->hGet('aluno:' . $prontuario, 'prontuario'),
			$this->redis->hGet('aluno:' . $prontuario, 'isNerd')
		);
		return $aluno;
	}

	/**
	 * Exibe todos os valores da tabela slow_table.
	 *
	 * @param 
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	public function getAllMysql()
	{
		$sql = "SELECT * FROM slow_table";
		foreach ($this->mysql->query($sql) as $row)
			print_r($row);
	}

	/**
	 * Exibe todas as informações do Redis para teste de performace.
	 *
	 * @param 
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	public function getAllRedis()
	{
		
	}
}
