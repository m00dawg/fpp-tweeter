<?php
///opt/fpp/plugins/rds_plugin/callbacks --type media --data {"type":"both","Sequence":"rds test.fseq","Media":"test song.mp3","title":"Song Title","artist":"Song Artist"}

require_once '/opt/fpp/www/commond.php';

require_once 'TwitterAPIExchange.php';
require_once 'twitter.conf.php';

const TWEET_TYPE=1;
const TITLE_ARG=2;

if(!isset($argv))
  exit(1);

if($argv[TWEET_TYPE] == 'Song')
{
  $message = "Now playing: ".$argv[TITLE_ARG];
  $url = 'https://api.twitter.com/1.1/statuses/update.json';
  $requestMethod = 'POST';
  $postfields = array(
    'status' => $message
  );
  echo $message;

  //$twitter = new TwitterAPIExchange($twitterSettings);
  //echo $twitter->buildOauth($url, $requestMethod)
  //  ->setPostfields($postfields)
  //  ->performRequest();
}

//$titleArgIndex = 7;
//$title = explode(':',$argv[$titleArgIndex]);


?>
