build:
	docker-compose build --no-cache --force-rm
up:
	docker-compose up -d
stop:
	docker-compose stop
exec:
	docker exec -it spk /bin/bash
