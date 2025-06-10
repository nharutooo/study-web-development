<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>おはよう</title>
    <link rel="stylesheet" href="css/test.css" type="text/css">
</head>

<body>
    <?php
        if (isset($_POST['name'])) {
            echo '送信された値 : ' . htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        }

        if (isset($_GET['name'])) {
            echo 'GET:' . htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
        }
    ?>
    <form action="sample9.php" method="post">
        名前 : <input type="text" name="name">
        <input type="submit" value="送信">
    </form>
</body>
</html>