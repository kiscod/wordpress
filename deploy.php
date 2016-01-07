<?php

	error_reporting ( E_ALL );

	$dir = '/usr/share/wordpress';

	$handle = popen('cd '.$dir.' && git pull 2>&1','r');

	$read = stream_get_contents($handle);

	printf($read);

	pclose($handle);

?>
