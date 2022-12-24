# Docker config for Laravel Application

> used with laravel 7.29

## images list
<!-- - php:7.4-apache -->
- php:7.4-apache
- postgres:10.6-alpine or
- mysql 8.0.29
- adminer

## how to use

1. Clone this repository.
2. Go to folder docker-php-3, uncomment postgress images or mariadb images in docker-compose.yml file.
3. Build images using this command
   > $ docker-compose build
4. Run images using this command 
   > $ docker-compose up -d
5. Go to app shell using this command
   > $ docker exec -it app bash
6. From inside the container install laravel using this command
   > $ composer create-project --prefer-dist laravel/laravel:^8.0 project
7. when success 'project' folder will be created, and then edit docker-compose.yml, find line 17 replace with this
   > &ndash; .project:/var/www/html