<?php
namespace Psr\Log;

interface LoggerInterface
{
    public function debug(string $msg);
    public function info(string $msg);
    public function notice(string $msg);
    public function critical(string $msg);
    public function error(string $msg);
}