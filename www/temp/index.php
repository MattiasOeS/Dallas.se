<?php

header( "cache-control: private" );
header( "pragma: no-cache" );

include "http://web-3.crystone.se/global/dynparked.php?domain=" . $_SERVER['HTTP_HOST'] . "&remotelogo=yes&date=" . time();

?>