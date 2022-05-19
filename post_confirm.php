// POSTを受け取る
// POSTの場合はパスワードも送ってみる。

<?php
// POSTを受け取る
$name = $_POST['name'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];
$password = $_POST['password'];
?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?= h($name) ?>
    EMAIL：<?= h($mail) ?>
    電話番号: <?= h($tel) ?>
    パスワード：<?= h($password)  ?>

    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
<!-- <php
        // try{
        //     if(isset($_POST['code'])==true){//処理コードがあるか
                
        //         //データベースにアクセス
        //         $dsn = 'mysql:dbname=test;host=localhost;charset=utf8';
        //         $user = 'root';
        //         $password ='';
        //         $dbh = new PDO($dsn,$user,$password);
        //         $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //         switch($_POST['code']){//処理コード別に処理
        //             case 1:            //データベースにテーブルを作成する処理
        //                 if(isset($_POST['name'])==true){
        //                     //データベースに対して実行するSQL文を作成
        //                     $sql = 'CREATE TABLE IF NOT EXISTS '.$_POST['name'].' (id INT(11) NOT NULL auto_increment PRIMARY KEY,hogehoge TEXT) DEFAULT CHARSET="utf8"';
        //                     //SQL文を実行
        //                     $result = $dbh->query($sql);
        //                 }
        //                 break;
//                     case 2:            //データベースのテーブルを表示する処理
//                         print '<table><tr><th>№</th><th>テーブル名</th></tr>';
//                         if(isset($_POST['name'])==true){
//                             //データベースに対して実行するSQL文を作成
//                             $sql = 'SHOW TABLES FROM test';
//                             //SQL文を実行
//                             $table_stmt=$dbh->prepare($sql);
//                             $table_stmt->execute();
//                             //行番号用変数を用意
//                             $i=1;
//                             //データベースのテーブルすべて読み出すまでループ
//                             while($table_rec = $table_stmt->fetch(PDO::FETCH_ASSOC)){
//                                 //連想配列すべてを読み出すまでループ
//                                 foreach($table_rec as $key => $val){
//                                     //番号とテーブル名とキーを表示
//                                     print '<tr><td>'.$i.'</td><td>'.$val.'('.$key.')</td></tr>';
//                                     $i+=1;
//                                 }
//                             }
//                         }
//                         print '</table>';
//                         break;
//                 }
//             }
//         }
//         catch (Exception $e){//処理でエラーが発生した時はこちらを実行する
//             print $e->getMessage();
//         }
//     ?>
// </body>
// </html> -->