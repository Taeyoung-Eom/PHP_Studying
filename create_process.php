<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /index.php?id='.$_POST['title']);
?> 
<!-- 사용자가 submit버튼을 눌렀을 떄 redirection해버린다. 즉 header가 정의한 주소로 보내버린다. 그게 redirection이고 함수는 header를 쓴다. redirection은 다른방향으로 보내버린다는 의미이다. -->