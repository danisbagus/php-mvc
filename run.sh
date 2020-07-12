#!/bin/bash

IMAGE_NAME="danisbagus/php-mvc "
CONTAINER_NAME="php-mvc-app"
PORT=4000
TARGET_PORT=80
VOLUME_PATH=$(pwd)/app:/app

while getopts c:p:v:i: flag
do
    case "${flag}" in
        c) CONTAINER_NAME=${OPTARG};;
        p) PORT=${OPTARG};;
        v) VOLUME_PATH=${OPTARG};;
        i) IMAGE_NAME=${OPTARG};;
    esac
done

# docker run --network=php-mvc -e MYSQL_ROOT_PASSWORD=123  --name db-phpmvc mysql:5.6
# docker run --network=php-mvc --name myadmin -d --link db-phpmvc:db -p 4001:80 phpmyadmin/phpmyadmin

docker run --rm --network=php-mvc  --name $CONTAINER_NAME -p $PORT:$TARGET_PORT -v $VOLUME_PATH $IMAGE_NAME


