<<<<<<< HEAD
# Makefile for generating minified files

.PHONY: all

# we cheat and process all .js files instead of an exhaustive list
all: $(patsubst %.js,%.min.js,$(filter-out %.min.js,$(wildcard *.js)))

%.min.js: %.js
	yui-compressor $< -o $@

test:
	./node_modules/.bin/jshint *jquery.flot.js
=======
# Makefile for generating minified files

.PHONY: all

# we cheat and process all .js files instead of an exhaustive list
all: $(patsubst %.js,%.min.js,$(filter-out %.min.js,$(wildcard *.js)))

%.min.js: %.js
	yui-compressor $< -o $@

test:
	./node_modules/.bin/jshint *jquery.flot.js
>>>>>>> dc6f5e4785075211e9a8d0f8d80bd5a4d0d7383c
