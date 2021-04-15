<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql = "
    INSERT INTO  (
        title, 
        description, 
        created
        ) VALUES(
        'MYSQL',
        'MYSQL is ..',
        NOW()
        )";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
}
?>
