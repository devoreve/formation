<?php

function sum(float ...$numbers): float
{
    $total = 0;
    
    foreach ($numbers as $number) {
        $total += $number;
    }
    
    return $total;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Git</title>
</head>
<body>
    <h1>Git et github</h1>
</body>
</html>