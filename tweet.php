<?php
///opt/fpp/plugins/rds_plugin/callbacks --type media --data {"type":"both","Sequence":"rds test.fseq","Media":"test song.mp3","title":"Song Title","artist":"Song Artist"}

require_once '/opt/fpp/www/common.php';

require_once 'TwitterAPIExchange.php';
require_once 'twitter.conf.php';

if(!isset($argv))
  exit(1);

foreach($argv as $value)
{
  if(preg_match('/^title/', $value))
  {
    $title = explode(':', $value)[1];
    break;
  }
}

if($argv[TWEET_TYPE] == 'Song')
{
  $message = "Now playing: ".$argv[TITLE_ARG];
  $url = 'https://api.twitter.com/1.1/statuses/update.json';
  $requestMethod = 'POST';
  $postfields = array(
    'status' => $message
  );

  $twitter = new TwitterAPIExchange($twitterSettings);
  echo $twitter->buildOauth($url, $requestMethod)
    ->setPostfields($postfields)
    ->performRequest();
}

?>
