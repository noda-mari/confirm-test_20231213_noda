# お問い合わせフォーム

## 環境構築
1.git clone git@github.com:coachtech-material/laravel-docker-template.git

2.dockerdocker_compose up -d --build

## laravel環境構築
1.docker-compose exec php bash

2.composer install 

3.cp .env.example .env  .env.exampleから.envを作成し、環境変数を変更

4.php artisan key:generate 

5.php artisan migrate

6.php artisan db:seed

## 使用技術
laravel: 8

nginx: 1.21.1

PHP: 7.4.9

MySQL: 8.0.26

## ER図


## URL
開発環境:http://localhost/

phpMyAdmin :http//localhost:8080/
