<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2EA6E9;
        }
    </style>
    <title>POST演習Kadai</title>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <P>※post_confirm.phpにpostで送ってください。</P>

    <form action="post_confirm.php" method="post">
        お名前: <input type="text" name="name">
        EMAIL: <input type="text" name="mail">
        電話番号: <input type="text" name="tel">
        パスワード:<input type="text" name="password">
        <input type="submit" value="送信">
    </form>
</body>

</html>
