
<?php


/*
    SYNTAX FOR DSN
    DSN
        -> data source name
        -> contains the infom requried to connect to the database
        $dsn = 'mysql:dbname=testdb;host=127.0.0.1;port=portNumber(optional / default port -> 3306)';

        $user = 'dbuser';
        $password = 'dbpass';

        
        PDO SYNTAX
        
        varname = new PDO($dsn, $user, $password);
*/
$dsn = "mysql:host=localhost;port=3308;dbname=todoapp;charset=utf8";
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
