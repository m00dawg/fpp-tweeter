#!/bin/bash
#LOG='/home/fpp/media/plugins/tweeter/debug.log'
LOG='/dev/null'
exec >> $LOG

php /home/fpp/media/plugins/tweeter/tweet.php "$@"
