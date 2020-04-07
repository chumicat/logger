<?php
namespace Php\Exam;
use Psr\Log\LoggerInterface;



class Logger implements LoggerInterface
{
    
    // initial sqlite3
    function __construct() {
        $pdo = new PDO('sqlite:practicedb.db');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->exec("CREATE TABLE IF NOT EXISTS foo (id INTEGER PRIMARY KEY AUTOINCREMENT, level VARCHAR(10) NOT NULL, message TEXT NOT NULL)");
    }
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