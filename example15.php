<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 用form表示表單區塊 -->
    <!-- action 表示將值傳送到指定網頁位置 -->
    <!-- method 表示利用POST、GET方法傳送 -->
    <form action="example16.php" method="get">
        <h1>method: Get</h1>
        <!-- name 決定傳送值的名稱 value 為預設值-->
        <input type="text" name="getValue"value="method->get">
        <!-- submit 表示將值傳送出去-->
        <input type="submit" value="send">
    </form>

    <form action="example16.php" method="post">
        <h1>method: Post</h1>
        <input type="text" name="postValue" value="method->post">
        <input type="submit" value="send">
    </form>
</body>
</html>