<?php

require '../vendor/autoload.php';

use Dotenv\Dotenv;
use Twilio\Rest\Client;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// 👍
$sid = $_ENV["TWILIO_ACCOUNT_SID"];
$token = $_ENV["TWILIO_AUTH_TOKEN"];
$fromPhone = $_ENV["TWILIO_TRAIL_NUMBER"];
$toPhone = $_ENV["TWILIO_VERIFIED_NUMBER"];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dist/output.css" rel="stylesheet">
    </head>

    <body>

        <div>

            <h1>Twilio Labs 🥼 - send sms</h1>

            <?php
            
                $message = "this is a first message";

                $twilio = new Client($sid, $token);

                $message = $twilio->messages
                                ->create($toPhone, // to
                                        ["body" => $message, "from" => $fromPhone]
                                );

                print_r($message->sid);

            ?>

        </div>

    </body>

</html>