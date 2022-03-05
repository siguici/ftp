<?php

spl_autoload_register(function (string $name) {
	if (preg_match('/^Ftp\\\(?<name>.*)$/', $name, $matches)) {
		$name = $matches['name'];
		if (is_file($file = __DIR__ . DIRECTORY_SEPARATOR . "$name.php")) {
			require_once $file;
		}
	}
});

require_once dirname(__DIR__) . '/ftp.php';
