<?php
    session_start();
    define('DB_DATABASE', 'checktest4');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    
    function connect() {
        try {
            // PDOインスタンスの作成
            $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
            // エラー処理方法の設定
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
    }

    // $host = 'localhost';
    // $username = 'root';
    // $password = 'root';
    // $dbname = 'checktest4';
    //$connect = mysqli_connect($host, $username, $password, $dbname);
    // if(!$connect) {
    //     die("接続に失敗しました。");
    // }
    // echo '接続に成功しました。';
    // mysqli_close($connect);

    // // セッション開始
    // session_start();
    // // DBサーバのURL
    // $db['host'] = "localhost";
    // // ユーザー名
    // $db['user'] = "root";
    // // ユーザー名のパスワード
    // $db['pass'] = "root";
    // // データベース名
    // $db['dbname'] = "checktest4";
?>