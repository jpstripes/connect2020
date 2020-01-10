.PHONY: build watch pretty

BIN := ./node_modules/.bin
BUILD := ./build

clean:
	rm -Rf $(BUILD)

build: clean
	@echo "Bundling assets.."
	$(BIN)/parcel build src/app.js --out-dir template/dist --no-source-maps
	@echo "Packing files.."
	mkdir -p $(BUILD)
	cd template && zip -r -q .$(BUILD)/theme.zip *
	@echo "Listing artifacts.."
	@tree -hF build
	@echo "Done!"

watch:
	$(BIN)/parcel watch src/app.js --out-dir template/dist --public-url /wp-content/themes/jpstripes/

pretty:
	$(BIN)/prettier --write "{src,template}/**"
