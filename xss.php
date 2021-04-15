<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>XSS</title>
</head>
<body>
    <h2>Cross site scripting</h2>
    <?php
    echo htmlspecialchars('<script>alert("babo");</script>');
    ?>
</body>
</html>