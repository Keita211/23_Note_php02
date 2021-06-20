

<?php
require_once('funcs.php'); // funcs.php を読み込む

// DB接続
try {
    $pdo = new PDO('mysql:dbname=kadai_php02;charset=utf8;host=localhost','root','root'); // rootがデフォルト値
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }

$stmt = $pdo->prepare('SELECT * FROM kadai_table_01') ;// SQLを準備

$status = $stmt->execute(); 

 //* JSONでhtmlに渡す場合のcode*//
 
// $view = '';
// $resultarray = []; 

// if ($status == false) {
//     $error = $stmt->errorInfo();
//   exit("ErrorQuery:".$error[2]);
// }else{
//     while( $result = $stmt ->fetch(PDO::FETCH_ASSOC)){ 
//     array_push($resultarray,$result);}
//     $json = json_encode($result,SON_PRETTY_PRINT |JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
//     }
//     // $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);
//     // $json = json_encode($result,JSON_PRETTY_PRINT |JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);}
//     var_dump($json);


 // * php内で表示する場合のcode*//

$view="";
if($status==false) {
        //execute（SQL実行時にエラーがある場合）
      $error = $stmt->errorInfo();
      exit("ErrorQuery:".$error[2]);
    
    }else{
      //Selectデータの数だけ自動でループしてくれる
      //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
      while($result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
        // $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $view .= "<P>";
        $view .= h($result['name']).':'.h($result['url']).':'.h($result['review'].':'.h($result['comment']));
        $view .= "</P>";
      }};
          
  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ表示
    </title>
<!DOCTYPE html>
<html lang="ja">
<head>

</head>
<body id="main">
<div>
    <div><?= $view ?></div>
</div>

</body>
</html>