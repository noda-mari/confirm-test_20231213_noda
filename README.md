# お問い合わせフォーム

## 環境構築

1.git clone git@github.com:coachtech-material/laravel-docker-template.git

2.docker-compose up -d --build

## laravel環境構築

1.docker-compose exec php bash

2.composer install

3.cp .env.example .env  .env.exampleフォイルからenvを作成し環境変数を変更

4.php artisan key:generate

5.php artisan migrate

6.php artisan db:seed

## 使用技術

laravel:8

mysql:8.0.26

nginx:1.21.1

PHP:7.4.9-fpm

## ER図

!(test.drawio.png)

## URL 

開発環境 :http//localhost/

phpMyadmin :http//localhost:8080/
