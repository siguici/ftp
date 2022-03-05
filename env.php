<?php

use Ftp\FtpDotenv;

if (!\function_exists('env')) {
	function env(?string $key = null, mixed $default = null): mixed {
		static $env;
		if (!isset($env)) {
			$env = new Dotenv();
		}
		return isset($key) ? $env->get($key, $default) : $env;
	}
}

if(!\function_exists('ftp_env')) {
	function ftp_env(?string $key = null, mixed $default = null): mixed {
		static $env;
		if (!isset($env)) {
			$env = new Dotenv();
		}
		return isset($key) ? $env->get($key, $default) : $env;
	}
}
