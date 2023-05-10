<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $files = array('nomor1.php', 'nomor2.php', 'nomor3.php', 'nomor4.php', 'nomor5.php', 'nomor6.php');
    
    foreach ($files as $file):
        include $file;
    endforeach;
?>
</body>
</html>