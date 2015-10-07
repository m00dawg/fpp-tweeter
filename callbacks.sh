#!/bin/bash
#LOG='/home/fpp/media/plugins/tweeter/debug.log'
LOG='/dev/null'

if [ $1 == '--list' ] 
then
    echo "media"
    exit 0
fi

exec >> $LOG
php /home/fpp/media/plugins/tweeter/tweet.php "$@"
