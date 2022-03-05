<?php namespace Ftp;

class FtpApplication {
    public function setCwd(string $cwd): self {
        if (!is_dir($cwd)) {
            throw new \InvalidArgumentException("$cwd is not a directory");
        }
        chdir($this->cwd = realpath($cwd));
        return $this;
    }

    public function getCwd(): string {
        return $this->cwd;
    }

    public function run(int $argc, array $argv): void {
        if ($argc > 1) {
            match ($argv[1]) {
                'put' => $this->put(...array_slice($argv, 2)),
                'get' => $this->get(...array_slice($argv, 2)),
                default => $this->help(),
            };
        }
        else $this->help();
    }

    public function help(): void {
        echo <<<USAGE
Usage: ftp [command] [arguments]
Commands:
    put       Upload files
    get       Download files

USAGE;
    }

}
