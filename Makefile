# ビルド
up-build:
	docker-compose up -d --build
# 起動
up:
	docker-compos up -d
# 停止
down:
	docker-compose down
# 再起動
restart:
	@make down
	@make up
# mysqlコンテナ
exec-db:
	docker-compose exec mysql /bin/bash