<?php
require_once '/opt/fpp/www/common.php';
require_once 'TwitterAPIExchange.php';
require_once 'twitter.conf.php';

if(!isset($argv))
  exit(1);

/*
 * This is a bit hacky. We know that the JSON payload is argument 4 provided
 * by FPP, and this is what we are really after for our Tweets.
 * We decode it into an associative array for later use.
 */
$args = json_decode($argv[4], true);

$message = "Now playing: ".$args['title']." by ".$args['artist']." at ".date('g:i');

$url = $twitterEndpoint.'/statuses/update.json';
$requestMethod = 'POST';
$postfields = array(
  'status' => $message
);

$twitter = new TwitterAPIExchange($twitterSettings);
echo $twitter->buildOauth($url, $requestMethod)
  ->setPostfields($postfields)
  ->performRequest();


?>
