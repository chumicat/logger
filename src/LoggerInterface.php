<?php
namespace Php\Exam;

interface LoggerInterface
{
    public function debug(string $s);
    public function info(string $s);
    public function notice(string $s);
    public function critical(string $s);
    public function error(string $s);
}