<?php
namespace Php\Exam;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    // initial sqlite3
    function __construct() {}
    // Every function doing the same thing!
    // field 'id' will increase automatically
    // insert function name to field 'level'
    // insert message $msg to field 'message'
    function debug(string $msg) {}
    function info(string $msg) {}
    function notice(string $msg) {}
    function critical(string $msg) {}
    function error(string $msg) {}
}