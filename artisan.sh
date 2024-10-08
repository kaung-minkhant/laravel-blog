#!/bin/bash
docker compose run --rm -u $(id -u):$(id -g) artisan "$@"
#  php /var/www/html/artisan serve"