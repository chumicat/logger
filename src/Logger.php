<?php
namespace Php\Exam;
use Psr\Log\LoggerInterface;

class Logger implements LoggerInterface
{
    private $pdo;

    /**
     * Initial sqlite3 with table "logs" in $this->pdo
     * 
     * logs = 
     * * id INTEGER PRIMARY KEY AUTOINCREMENT
     * * level VARCHAR(10) NOT NULL
     * * message TEXT NOT NULL
     */
    public function __construct() {
        $this->pdo = new \PDO('sqlite:syslog.sqlite3');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS logs (id INTEGER PRIMARY KEY AUTOINCREMENT, level VARCHAR(10) NOT NULL, message TEXT NOT NULL)");
    }

    public function emergency($message, array $context = []) {$this->log('emergency', $message);}
    public function alert($message, array $context = []) {$this->log('alert', $message);}
    public function critical($message, array $context = []) {$this->log('critical', $message);}
    public function error($message, array $context = []) {$this->log('error', $message);}
    public function warning($message, array $context = []) {$this->log('warning', $message);}
    public function notice($message, array $context = []) {$this->log('notice', $message);}
    public function info($message, array $context = []) {$this->log('info', $message);}
    public function debug($message, array $context = []) {$this->log('debug', $message);}
    public function log($level, $message, array $context = []) {
        $stmt = $this->pdo->prepare("INSERT INTO logs (level, message) VALUES (:lv, :msg)");
        $stmt->bindValue(':lv', $level);
        $stmt->bindValue(':msg', $message);
        $stmt->execute();
    }
}