<?php
if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
    echo $_GET['startDate'] .'<br>'. $_GET['endDate'];
}else {
    echo 'error';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a
href= "index.php?startDate=2/05/2016&endDate=27/11/201"
title="Lien vers une page">YOP !</a>
    
</body>
</html>