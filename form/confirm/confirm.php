<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力フォームサンプル</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                入力フォームサンプルhtml
            </a>
        </div>
    </div>
</nav>
<div class="container">
    <h1>お問い合わせフォーム</h1>
    <form action="send.php" method="post">
        <div class="form-group">
            <label for="">メールアドレス</label>
            <p><?= $_POST['email'] ?></p>
            <input type="hidden" name="email" value="<?= $_POST['email'] ?>">
        </div>
        <div class="form-group">
            <label for="">お問い合わせ種別</label>
            <p><?= $_POST['type'] ?></p>
            <input type="hidden" name="type" value="<?= $_POST['type'] ?>">
        </div>
        <div class="form-group">
            <label for="">お問い合わせ内容</label>
            <p><?= nl2br($_POST['content']) ?></p>
            <input type="hidden" name="content" value="<?= $_POST['content'] ?>">
        </div>
        <div class="form-group">
            <input class="btn btn-default" type="submit" value="送信">
        </div>
    </form>
</div>
</body>
</html>