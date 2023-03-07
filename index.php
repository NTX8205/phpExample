<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./get_post/value.php" method="get">
        <h1>method: Get</h1>
        <input type="text" name="getValue"value="method->get">
        <input type="submit" value="send">
    </form>

    <form action="./get_post/value.php" method="post">
        <h1>method: Post</h1>
        <input type="text" name="postValue" value="method->post">
        <input type="submit" value="send">
    </form>
</body>
</html>