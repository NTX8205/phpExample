<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 可將PHP語法分開放置，在{}內可以放多個標籤-->
    <?php $var = 0; ?>
    <?php if ($var == 0) { ?>
       <h1>true</h1>
       <p>var :<?php echo $var ?></p>

   <?php } ?>
</body>

</html>