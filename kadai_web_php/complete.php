<?php
// セッションを開始
 session_start();
 
 // セッションに保存された「お名前」を取得
 $worker_name = isset($_SESSION['worker_name']) ? $_SESSION['worker_name'] : '名無し';
 ?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <h2><?php echo $worker_name; ?>の登録が完了しました。</h2>
    <p>社員情報がデータベースに保存されました。</p>
    <button id="back-btn" onclick="location.href='form.php';">戻る</button>
    <?php
     // セッション変数を初期化
     $_SESSION = array();
 
     // セッションを終了
     session_destroy();
     ?>    
</body>

</html>
