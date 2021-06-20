<?php



// DB接続
try {
    $pdo = new PDO('mysql:dbname=kadai_php02;charset=utf8;host=localhost','root','root'); // rootがデフォルト値
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }

$stmt = $pdo->prepare('SELECT * FROM kadai_table_01') ;// SQLを準備

$status = $stmt->execute(); 

$view = '';

if ($status == false) {
    $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    while($stmt ->fetch(PDO::FETCH_ASSOC)){
    $result = $stmt->fetch(PDO::FETCH_ASSOC);    
    $json = json_encode($result);
    }
};



  ?>