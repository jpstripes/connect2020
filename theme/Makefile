.PHONY: watch

BIN := ./node_modules/.bin

build:
	@echo "Bundling assets.."
	$(BIN)/parcel build src/app.js --out-dir template/dist --no-source-maps

watch:
	$(BIN)/parcel watch src/app.js --out-dir template/dist --public-url /wp-content/themes/jpstripes/
