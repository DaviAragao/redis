<?php
/**
 * Conexão com um banco de dados Mysql usando PDO.
 *
 * @author Casa Publicadora Brasileira - Davi Aragão
 **/
class MysqlConnection
{
	/**
	 * Armazena uma conexão para um banco de dados Mysql.
	 *
	 * @var PDO
	 **/
	private $mysql;

	/**
	 * Construtor
	 *
	 * @param string $dataBase - Nome do banco de dados.
	 * @param string $user - Nome do usuário.
	 * @param string $pass - Senha do banco de dados.
	 * @param string $server - Host ou IP do banco de dados.
	 * @return void
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	function __construct($dataBase, $user = 'root', $pass = 'root', $server = '127.0.0.1')
	{
		$this->mysql = $this->getNewPDOMysqlConnection($dataBase, $user, $pass, $server);
	}

	/**
	 * Retorna uma nova conexão para um banco de dados Mysql usando PDO.
	 *
	 * @param string $dataBase - Nome do banco de dados.
	 * @param string $user - Nome do usuário.
	 * @param string $pass - Senha do banco de dados.
	 * @param string $server - Host ou IP do banco de dados.
	 * @return PDO
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	private function getNewPDOMysqlConnection($dataBase, $user, $pass, $server)
	{
		$conn = null;
		try
		{
			$conn = new PDO("mysql:host=$server;dbname=$dataBase", $user, $pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage();
		}
		return $conn;
	}

	/**
	 * Retorna o valor em $this->mysql.
	 *
	 * @param 
	 * @return PDO $this->mysql.
	 * @author Casa Publicadora Brasileira - Davi Aragão
	 **/
	public function getMysql()
	{
		return $this->mysql;
	}
}
