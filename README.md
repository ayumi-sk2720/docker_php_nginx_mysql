## 概要
DockerでPHP, nginx, mysqlの環境を構築する

## コンテナ起動
* `$ make up-build`コマンドを実行する

## 起動確認
* [https://localhost:8000](https://localhost:8000) にアクセスすると、`Hello, world!`と表示される
* [https://localhost:8000/db.php](https://localhost:8000/db.php) にアクセスすると、DBに登録されているレコードの一覧が表示される


## コマンドについて
Makefileを参照すること