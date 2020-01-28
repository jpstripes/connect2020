.PHONY: build watch pretty

BIN := ./node_modules/.bin
BUILD := ./build

PARCEL_TARGETS := src/app.js src/admin.js
PARCEL_OPTS    := --out-dir template/dist --public-url ./

clean:
	rm -Rf $(BUILD)

build: clean
	@echo "Bundling assets.."
	$(BIN)/parcel build --no-content-hash --no-source-maps $(PARCEL_OPTS) $(PARCEL_TARGETS)
	@echo "Packing files.."
	mkdir -p $(BUILD)
	cd template && zip -r -q .$(BUILD)/theme.zip *
	@echo "Listing artifacts.."
	@tree -hF build
	@echo "Done!"

watch:
	$(BIN)/parcel watch --no-hmr $(PARCEL_OPTS) $(PARCEL_TARGETS)

pretty:
	$(BIN)/prettier --write "{src,template}/**"
