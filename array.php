<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Array</h2>
    <?php
    $friends = array('Daeho', 'Soonsung', 'Maljung', 'Taeyoung');
    echo "5년뒤 연봉 1억 받는 개발자".$friends[3].'<br>';
    echo $friends[1].'<br>';
    var_dump(count($friends));
    array_push($friends, 'Juho');
    var_dump($friends);
    ?>
</body>
</html>