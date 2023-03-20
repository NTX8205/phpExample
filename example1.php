<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "echo embed 1"?>
    
    <!-- 兩種顯示方法是一樣的-->
    <!-- 一種是用PHP輸出標籤與內容-->
    <?php echo "<h2>echo embed 2</h2>"?>
    <!-- 一種是在標籤裡輸出PHP的內容-->
    <h1><?php echo "echo embed 3"?></h1>
</body>
</html>