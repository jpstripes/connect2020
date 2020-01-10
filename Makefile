.PHONY: build up down

COMPOSE := docker-compose

build:
	$(COMPOSE) build

up:
	$(COMPOSE) up -d

down:
	$(COMPOSE) kill

reset: down
	rm -Rf ./db/data
	docker rm -f jpstripes_mysql
	$(MAKE) build
	$(MAKE) up
	@echo ""
	@echo "Reset done! Wait for a while, then visit fresh and clean website."
