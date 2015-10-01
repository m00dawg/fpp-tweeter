#!/bin/bash

if [ $1 == "--list" ]
then
    echo media
fi

if [ $1 == "--type" ]
then
    if [ $2 == "media" ]
    then
        echo "media stuff"
    fi
fi

