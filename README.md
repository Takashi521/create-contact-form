# アプリケーション名
FashionablyLate お問い合わせフォーム

ーーー

## 環境構築

# 1. Dockerイメージのビルド
$ docker-compose build

# 2.コンテナの起動
$ docker-compose up -d

# 3.Laravelのインストール（コンテナ内で）
$ composer create-project laravel/laravel create-contact-form

# 4.環境ファイルのコピー
$ cp .env.example .env

# 5.アプリケーションキーの生成
$ docker-compose exec app php artisan key:generate

# 6.マイグレーションの実行
$ docker-compose exec app php artisan migrate

※シーディングは時間が足りず実行できておりません。



##  使用技術(実行環境)

・Laravelのバージョン　-Laravel Framework 8.83.29
