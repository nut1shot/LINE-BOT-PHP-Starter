<?php
$access_token = 'XWlQds+rlvDMKi+F7FctC/Hai+GybmLSRjKUBC5Es5HrqE6gYGSYDQVg/auVZLwy9WbZ9QX7gAPrBEoETE03eKRqXCyMfIqxUQ+QO+3o1woHrs+JKKNKbc4MlMhHjX5uCXMBn+6+acMU53AlTd3ysgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

