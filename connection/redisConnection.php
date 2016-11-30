<?php
/**
 * Classe para a conexão com uma base de dados redis usando phpredis.
 *
 * @author Davi Aragão
 **/
class RedisConnection
{
	/**
	 * Conexão com um redis.
	 *
	 * @var Redis
	 **/
	private $redis;

	/**
	 * Construtor
	 *
	 * @param string $server - Endereço ip ou nome do host do servidor onde está o redis. 127.0.0.1 default.
	 * @param int $port - Número da porta onde o redis ouve. 6379 default.
	 * @return
	 * @author Davi Aragão
	 **/
	function __construct($server = '127.0.0.1', $port = 6379)
	{
		$this->redis = new Redis();
		$this->redis->connect($server, $port);
	}

	/**
	 * Retorna $this->redis.
	 *
	 * @param 
	 * @return Redis $redis.
	 * @author Davi Aragão
	 **/
	public function getRedis()
	{
		return $this->redis;
	}

	/**
	 * Atribui um novo valor a $this->redis.
	 *
	 * @param Redis $redis - Conexão com um redis.
	 * @return void
	 * @author Davi Aragão
	 **/
	public function setRedis($redis)
	{
		$this->redis = $redis;
	}
}
