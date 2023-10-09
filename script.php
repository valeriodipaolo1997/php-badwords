<?php

$paragraf = $_GET['paragraf'];
$bad_word = $_GET['bad_word'];

$paragraf_array = explode(' ', $paragraf);
$censured = str_replace($bad_word, '***', $paragraf_array);
var_dump($censured)



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>

<body>
    <div>
        la frase che hai scritto: <?php echo $_GET['paragraf']; ?>
    </div>
    <div>
        ha <?php echo strlen($_GET['paragraf']); ?> caratteri
    </div>

    <div>
        La frase che hai scritto: <?php echo implode(' ', $censured); ?>
    </div>
    <div>
        ha <?php echo strlen(implode(' ', $censured)); ?> caratteri
    </div>
</body>

</html>