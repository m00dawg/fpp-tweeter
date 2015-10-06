<?php
require_once '/opt/fpp/www/common.php';

$twitterSettings = array(
    'oauth_access_token' => ReadSettingFromFile('TwitterOAUTHAccessToken', 'tweeter'),
    'oauth_access_token_secret' => ReadSettingFromFile('TwitterOAUTHAccessSecret', 'tweeter'),
    'consumer_key' => ReadSettingFromFile('TwitterConsumerKey', 'tweeter'),
    'consumer_secret' => ReadSettingFromFile('TwitterConsumerSecret', 'tweeter'),
);
$twitterEndpoint = 'https://api.twitter.com/1.1/';

 ?>
