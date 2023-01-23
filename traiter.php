<?php
$fichier = fopen('essayer.txt', 'w');
echo fwrite($fichier, $_POST['texte']);
fclose($fichier);
?>

<!DOCTYPE html>h
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traiter</title>
    <link rel="stylesheet" href="audio.css">
</head>
<body>
    <div class="telecharger">
        <div class="a0">
            <a href="../super_programme.mp3" >écouter l'audio</a>
        </div>
        <div class="a1">
            
            <a href="../super_programme.mp3" download="mon_audio.txt">telecharger l'audio</a>
        </div>
        <div class="a2">
            <a href="index.php">Retour à l'acceil</a>
        </div>
        
    </div>

</body>
</html>