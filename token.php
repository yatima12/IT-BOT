<?php
 
$strAccessToken = "0i2v/wM+ufakKsO4rEPGJlBaRvRoQODlNlfrTyYbhx7dVdr9umhk8d4Ou0y/fQ6NlMEzKG2y98FkIgPOmWzQxXKTxmbdpwJQ786nmaTtMsK0PzEwR/+zmd/ipByxbxH2WOQDmACqgmyfeCwF1M4BFwdB04t89/1O/w1cDnyilFU=";
 

 
$strUrl = "https://api.line.me/v2/bot/message/push";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
$arrPostData = array();
$arrPostData['to'] = "USER_ID";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
