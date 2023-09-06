# docker_php_nginx_mysql
PHP, nginx, mysqlを使用してDockerコンテナを作成

# docker
## ローカル初期起動 手順
1. `$ make up-build`コマンドの実行
2. [https://localhost:8000](https://localhost:8000) でアクセスすると、`Hello, world!`と表示される
3. [https://localhost:8000/db.php](https://localhost:8000/db.php) でアクセスすると、DBに登録されているレコードの一覧が表示される


## コマンド
Makefileを参照すること