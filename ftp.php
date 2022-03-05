<?php

use Ftp\{
	FtpClient,
	FtpServer
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
