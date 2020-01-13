.PHONY: build watch pretty

BIN := ./node_modules/.bin
BUILD := ./build

PARCEL_OPTS := --out-dir template/dist --public-url /wp-content/themes/connect2020/dist

clean:
	rm -Rf $(BUILD)

build: clean
	@echo "Bundling assets.."
	$(BIN)/parcel build src/app.js --no-source-maps $(PARCEL_OPTS)
	@echo "Packing files.."
	mkdir -p $(BUILD)
	cd template && zip -r -q .$(BUILD)/theme.zip *
	@echo "Listing artifacts.."
	@tree -hF build
	@echo "Done!"

watch:
	$(BIN)/parcel watch src/app.js $(PARCEL_OPTS)

pretty:
	$(BIN)/prettier --write "{src,template}/**"
