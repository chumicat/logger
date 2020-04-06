<?php
namespace Php\Exam;

class Logger implements LoggerInterface
{
    function __construct() {}
    function debug(string $s) {}
    function info(string $s) {}
    function notice(string $s) {}
    function critical(string $s) {}
    function error(string $s) {}
    // function show($pdo, $keyword = null)
    // {
    //     $stmt;
    //     if ($keyword) {
    //         $stmt = $pdo->prepare("select * from foo where bar = :bar");
    //         $stmt->bindValue(':bar', $keyword);
    //         $stmt->execute();
    //     } else {
    //         $stmt = $pdo->prepare("select * from foo");
    //         $stmt->execute();
    //     }
    
    //     $result = $stmt->fetchAll();
    //     foreach ($result as $key => $row) {
    //         echo $key.':foo='.$row['bar']."\n";
    //     }
    // }
    
    
    // // create a db named practicedb
    // $pdo = new PDO('syslog.sqlite3');
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $pdo->exec("CREATE TABLE IF NOT EXISTS logs (id INTEGER PRIMARY KEY AUTOINCREMENT, level VARCHAR(10) NOT NULL, message TEXT NOT NULL)");
    // CREATE TABLE logs(
    //     id INTEGER PRIMARY KEY AUTOINCREMENT,
    //     level VARCHAR(10) NOT NULL,
    //     message TEXT NOT NULL
    //  );

    // switch ($argv[1]) {
    // case 'insert':
    //     $stmt = $pdo->prepare("INSERT INTO foo (bar) VALUES (:bar)");
    //     $stmt->bindValue(':bar', $argv[2]);
    //     $stmt->execute();
    //     show($pdo);
    //     break;
    // case 'search':
    //     show($pdo, $argv[2]);
    // }
}