<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php 
        for ($i=0;$i<5;$i++) {
            echo $i;
        }
    ?>

    <?php 
        for ($i=0;$i<5;$i++) {
            echo "<h2>$i</h2>";
        }
    ?>

    <?php for ($i=0;$i<5;$i++) { ?>
        <h1><?php echo $i ;?></h1>
    <?php } ?>
</body>
</html>