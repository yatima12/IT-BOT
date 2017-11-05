<?php

$strAccessToken = "0i2v/wM+ufakKsO4rEPGJlBaRvRoQODlNlfrTyYbhx7dVdr9umhk8d4Ou0y/fQ6NlMEzKG2y98FkIgPOmWzQxXKTxmbdpwJQ786nmaTtMsK0PzEwR/+zmd/ipByxbxH2WOQDmACqgmyfeCwF1M4BFwdB04t89/1O/w1cDnyilFU=";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);

$strUrl = "https://api.line.me/v2/bot/message/reply";
$_userId = $arrJson['events'][0]['source']['userId'];
$_msg = $arrJson['events'][0]['message']['text'];

$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";


$filename = ''.$_userId.'.txt';
if (file_exists($filename)) {
  $myfile = fopen(''.$_userId.'.txt', "w+") or die("Unable to open file!");
  fwrite($myfile, $_msg);
  fclose($myfile);
} else {
  $myfile = fopen(''.$_userId.'.txt', "x+") or die("Unable to open file!");
  fwrite($myfile, $_msg);
  fclose($myfile);
}





if($arrJson['events'][0]['message']['text'] == "เธชเธงเธฑเธชเธ”เธต"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "บบบบ”คุณ ID เพำำำ“เธำำำำ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "เธเธทเนเธญเธญเธฐเนเธฃ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เธเธฑเธเธขเธฑเธเนเธกเนเธกเธตเธเธทเนเธญเธเธฐ";
}else if($arrJson['events'][0]['message']['text'] == "เธ—เธณเธญเธฐเนเธฃเนเธ”เนเธเนเธฒเธ"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เธเธฑเธเธ—เธณเธญเธฐเนเธฃเนเธกเนเนเธ”เนเน€เธฅเธข เธเธธเธ“เธ•เนเธญเธเธชเธญเธเธเธฑเธเธญเธตเธเน€เธขเธญเธฐ";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "เธเธฑเธเนเธกเนเน€เธเนเธฒเนเธเธเธณเธชเธฑเนเธ";
}
 
 
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

sleep(5);
  $myfile = fopen(''.$_userId.'.txt', "w+") or die("Unable to open file!");
  fwrite($myfile, $_msg1);
  fclose($myfile);
?>
