<?php

require('vendor/autoload.php');
$redis = new Predis\Client();
$r = $redis;

if (!defined("STDIN")) {
    define("STDIN", fopen('php://stdin','r'));
}

exec("clear");

printf("\n*****\n\nTech Container\nby @lincolnthedev\n\n*****\n\n\n\n");

sleep(3);

printf("Installing Dependencies...\n");

exec("apt update");
exec("apt install redis -y");
exec("apt install figlet -y");

exec("clear");

exec("figlet -f small lincolnthedev");

sleep(5);

exec("clear");



printf("What should your username be?\n");
$username = fread(STDIN, 80);
$r->set('tc-username', $username);
echo('OK! Username set to: ' . $strName . "\n\n");

printf("What should your password be?\n");
$password = fread(STDIN, 80);
$r->set('tc-password', $password);
echo('OK! Password set!' . "\n\n");

exec("wget r.lwcdev.co/test/hello-world.php /var/www/html/index.php");
