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

</body>

</html>