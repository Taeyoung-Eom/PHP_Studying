<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    안녕하세요. <?php echo $_GET['address']; ?>에 사시는 <?php echo $_GET['name']; ?>님
    <!-- http://127.0.0.1:8080/parameter.php?name=Eom%20Taeyoung -->
    <!-- 위와같이 nmae=뒤에 원하는 문자열을 작성하면 name값이 변경된다. -->
</body>
</html>