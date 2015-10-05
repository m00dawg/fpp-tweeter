#!/bin/bash

TITLE_ARG=$7

if [ $1 == "--list" ]
then
    echo media
fi

if [ $1 == "--type" ]
then
    if [ $2 == "media" ]
    then
        TITLE=`echo $TITLE_ARG | awk -F: {'print $2'}`
        php ./tweet.php Song "$TITLE"
    fi
fi
