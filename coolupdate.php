<?php

	$www_folder = "/usr/share/wordpress" ;

	$git_repo = "git@git.coding.net:qiushile/wordpress.git" ;

	$t1 = "sudo cd $www_folder && sudo git pull origin master >> ~/wordpress.logs";
	echo $t1;

	$t2 = "sudo cd $www_folder && sudo git pull $git_repo 2>&1 >> ~/wordpress.logs";

	echo shell_exec($t1);

?>
