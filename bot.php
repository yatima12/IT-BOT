<?php
$strAccessToken = "ACCESS_TOKEN";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);


echo "I am a IT BOT";
?>
