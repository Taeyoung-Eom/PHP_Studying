<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Function</title>
    </head>
    <body>
        <h1>Function</h1>
        <?php
        $str = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit aperiam tenetur odio consequuntur 
        
        
        sapiente obcaecati, laudantium quidem hic sed quas? Nostrum maxime molestias accusantium corrupti provident ducimus, corporis adipisci nam.";
        echo $str
        ?>
        <h2>strlen()</h2>
        <?php
        echo strlen($str);
        ?>
        <h2>nl2br</h2>
        <?php
        echo nl2br($str);
        ?>
        <!-- 페이지에서 코드를 확인하게되면 자동으로 br코드가 들어가있다. -->
    </body>
</html>