# laravel_test

It's will be new test_project wiht laravel/Nginx/Docker/SmartGit/GitHub

DevDependencies:

Install git
Install docker
Install docker-compose
Install make
Load docker images and create containers || start containers


make start
Stop containers

make stop
Show all started containers

make show
Add SSL certificate

stats artisan server # docker-compose exec app php app/artisan serve --port=8000 --host=0.0.0.0

sudo docker run -it --rm --name certbot \
            -v "/etc/letsencrypt:/etc/letsencrypt" \
            -v "/var/lib/letsencrypt:/var/lib/letsencrypt" \
            -p 80:80  certbot/certbot certonly
