<?php

require_once('funcs.php'); 

$name = $_POST["name"];
$url = $_POST["url"];
$review = $_POST["review"];
$comment = $_POST["comment"];

// echo $name;
// echo '<br>';
// echo $url;
// echo '<br>';
// echo $review;
// echo '<br>';
// echo $comment;


// DB接続
try {
    //Password:MAMP='root',XAMPP=''
    $pdo = new PDO('mysql:dbname=kadai_php02;charset=utf8;host=localhost','root','root'); // rootがデフォルト値
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }

$stmt = $pdo->prepare(
  "INSERT INTO kadai_table_01 ( id,name,url,review,comment)
  VALUES ( NULL,:name,:url,:review,:comment) "
);

$stmt-> bindValue(':name', $name,PDO::PARAM_STR);
$stmt-> bindValue(':url', $url,PDO::PARAM_STR);
$stmt-> bindValue(':review', $review,PDO::PARAM_INT);
$stmt-> bindValue(':comment', $comment,PDO::PARAM_STR);

$status = $stmt->execute();// 実行

if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMassage:".$error[2]);
}else{
  header('Location: index.html');//ヘッダーロケーション（リダイレクト）
}

?>