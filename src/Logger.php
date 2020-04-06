<?php
namespace Php\Exam;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    function __construct() {}
    function debug(string $s) {}
    function info(string $s) {}
    function notice(string $s) {}
    function critical(string $s) {}
    function error(string $s) {}
}