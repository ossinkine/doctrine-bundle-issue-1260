
    docker-compose up -d --build
    echo APP_ENV=prod > .env.local # or prod_env
    echo APP_DEBUG=false >> .env.local
    rm -rf var
    docker-compose exec php bin/console cache:warmup
    docker-compose exec ab wget -O - http://nginx/
    docker-compose exec ab ab -n 10000 -c 1 http://nginx/
