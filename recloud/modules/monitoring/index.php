<link rel="stylesheet" href="/recloud/modules/monitoring/template/styles/style.css">

<?php
require __DIR__ . '/functions.php';
require __DIR__ . '/core/MinecraftPing.php';
require __DIR__ . '/core/MinecraftPingException.php';

use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

try{

	foreach ($server as $e) {

		list($host, $port, $name, $desc) = explode(":", $e);

		$Query = new MinecraftPing( $host , $port );
		$ServerInfo = $Query->Query();

		if ($ServerInfo) {
			$online = $ServerInfo['players']['online'] . " из " . $ServerInfo['players']['max'];
			$procentValue = round($ServerInfo['players']['online'] * 100 / $ServerInfo['players']['max']);
			$procentValueDefault = $ServerInfo['players']['online'] * 100 / $ServerInfo['players']['max'];
		}

		if (!$ServerInfo) {
			$online = $server_cfg['offline']['text'];
			$procentValue = $server_cfg['offline']['procent'];
		}

		$allUsers += $ServerInfo['players']['online'];

		include 'template/server.php';

	}

	include 'template/stats.php';

}

finally{
	if( $Query )
	{
		$Query->Close();
	}
}
?>