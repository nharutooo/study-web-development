<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
        <?php
            for($i=1; $i <= 365; $i++) {
                echo $i . " ";
                
                if ($i % 20 == 0) {
                    echo "<br>";
                }
            }
        ?>
</body>
</html>