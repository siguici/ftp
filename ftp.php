<?php

use Ftp\{
	FtpClient,
	FtpServer,
	FtpDotenv
};

if (!function_exists('ftp_client')) {
	function ftp_client(FtpServer $server, string $username, string $password): FtpClient {
		return new FtpClient($server, $username, $password);
	}
}

if (!function_exists('ftp_server')) {
	function ftp_server(string $host, int $port = 21, int $timeout = 90, bool $secure = false): FtpServer {
		return new FtpServer($host, $port, $timeout, $secure);
	}
}

if (!\function_exists('env')) {
	function env(?string $key = null, mixed $default = null): mixed {
		static $env;
		if (!isset($env)) {
			$env = new FtpDotenv();
		}
		return isset($key) ? $env->get($key, $default) : $env;
	}
}

if(!\function_exists('ftp_env')) {
	function ftp_env(?string $key = null, mixed $default = null): mixed {
		static $env;
		if (!isset($env)) {
			$env = new FtpDotenv();
		}
		return isset($key) ? $env->get($key, $default) : $env;
	}
}
