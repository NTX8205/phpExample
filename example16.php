<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>傳值</title>
</head>
<body>
    <?php
        //判斷是否有GET或是POST的值，有就取得，沒有就設成noValue
        $getValue = isset($_GET["getValue"])? $_GET["getValue"]:"noValue";
        $postValue = isset( $_POST["postValue"])? $_POST["postValue"]:"noValue";
    ?>
    <h1><?php echo "getValue :" . $getValue; ?></h1>
    <h1><?php echo "postValue :" . $postValue; ?></h1>
    <button>
        <a href="example15.php">返回上一頁</a>
    </button>
</body>
</html>