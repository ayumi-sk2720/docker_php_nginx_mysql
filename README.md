## 概要
DockerでPHP, nginx, mysqlの環境を構築する

## コンテナ起動
* `$ make up-build`コマンドを実行する

## 起動確認
* [https://localhost:8000](https://localhost:8000) にGET送信すると、`Hello, world!`と表示される
* [https://localhost:8000](https://localhost:8000) に（jsonデータで）POST送信すると、送信した`id`と`name`が表示される
    * 送信データ: `{ "id": "1", "name": "taro" }`
    * 返り値: `{'id': 1, 'name': taro}`
* [https://localhost:8000/db.php](https://localhost:8000/db.php) にアクセスすると、DBに登録されているレコードの一覧が表示される


## コマンドについて
Makefileを参照すること