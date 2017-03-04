<?php

if(!$argv[1]) {
	die('No aws_keys providen\n');
}

$string = urlencode ($argv[1]);
echo $string."\n";
