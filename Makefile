.PHONY: up down

COMPOSE := docker-compose

up:
	$(COMPOSE) up -d

down:
	$(COMPOSE) kill
