<?php
$conn = mysqli_connect(
    'localhost', 
    'root', 
    '111111', 
    'opentutorials');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
    $escaped_title = htmlspecialchars($row['title']);
    $list = $list."<li><a href=\"pm_index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}

$article = array(
    'title'=>'Welcome',
    'description'=>'Hello, web'
);
$update_link = '';
if(isset($_GET['id'])){
    $filterd_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = htmlspecialchars($row['title']);
    $article['description'] = htmlspecialchars($row['description']);

    $update_link = '<a href="pm_update.php?id='.$_GET['id'].'">Update</a>';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>WEB</title>
    </head>
    <body>
        <h1><a href="pm_index.php">WEB</a></h1>
        <ol>
            <?=$list?>
        </ol>
        <form action="pm_process_update.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <p><input type="text" name="title" placeholder="title" value="<?=$article['title']?>"></p>
            <p><textarea name="description" placeholder="description"><?=$article['description']?></textarea></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>