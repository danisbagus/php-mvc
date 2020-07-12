#!/bin/bash

[[ -z ${1} ]] && echo "Missing environment argument .... Usage ./build <app|base>" && exit 1

DOCKERFILE_NAME="Dockerfile_app"
IMAGE_TAG="danisbagus/php-mvc "

if [[ ${1} && $1 = "base" ]]; 
then 
    DOCKERFILE_NAME="Dockerfile_base"
    IMAGE_TAG="danisbagus/base-php7"
else
    DOCKERFILE_NAME="Dockerfile_app"
    IMAGE_TAG="danisbagus/php-mvc "
fi

cp $DOCKERFILE_NAME Dockerfile

echo "Build image ..............."

docker build -t $IMAGE_TAG .

rm Dockerfile