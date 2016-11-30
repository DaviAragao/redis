<?php
include_once 'config/config.php';

$conn = new RedisConnection('serverswm.ddns.net');
$redis = $conn->getRedis();

//$redis->set('tituloTrabalho', 'Morte ao SQL!!');
//$redis->set('olho', 'Dos mesmos criadores de Morte ao Windows!!');
//$redis->lpush('nomes', 'Davi Aragão');
//$redis->lpush('nomes', 'Lucas Monari');
//$redis->lpush('nomes', 'Polido Polido');

echo "<center><h1>" . $redis->get('tituloTrabalho') . "</h1>";
echo "<h4>" . $redis->get('olho') . "</h4>";
echo "<h2>" . $redis->get('BDNC') . "</h2>";
echo "<br>";
foreach ($redis->lrange('nomes', 2, 4) as $nome)
	echo "<h5>" . $nome . "</h6>";
echo "</center>";
