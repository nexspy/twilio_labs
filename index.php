<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use Twilio\Rest\Client;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$twilioSid = $_ENV["TWILIO_ACCOUNT_SID"];
$twilioAuthToken = $_ENV["TWILIO_AUTH_TOKEN"];

// 👍

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dist/output.css" rel="stylesheet">
    </head>

    <body>

        <div>

            <h1>Twilio Labs 🥼</h1>

            <?php
                $sid = $_ENV["TWILIO_ACCOUNT_SID"];
                $token = $_ENV["TWILIO_AUTH_TOKEN"];

                $fromPhone = "+447458152415";
                $toPhone = "+447385183855";
                $message = "this is a first message";

                $twilio = new Client($sid, $token);

            ?>

        </div>

    </body>

</html>