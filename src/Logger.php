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

    /**
     * Insert values into table "logs"
     * 
     * This function will be called by other function to insert values
     * Field "id" didn't need to fill value since it increase automatically
     * 
     * @param string $lv value insert to field "level"
     * @param string $msg value insert to field "message"
     * @return void
     */
    private function insert(string $lv, string $msg): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO logs (level, message) VALUES (:lv, :msg)");
        $stmt->bindValue(':lv', $lv);
        $stmt->bindValue(':msg', $msg);
        $stmt->execute();
    }

    public function debug(string $msg) {$this->insert('debug', $msg);}
    public function info(string $msg) {$this->insert('info', $msg);}
    public function notice(string $msg) {$this->insert('notice', $msg);}
    public function critical(string $msg) {$this->insert('critical', $msg);}
    public function error(string $msg) {$this->insert('error', $msg);}
}