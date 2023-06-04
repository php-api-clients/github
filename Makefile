# set all to phony
SHELL=bash

.PHONY: *

DOCKER_CGROUP:=$(shell cat /proc/1/cgroup | grep docker | wc -l)
COMPOSER_CACHE_DIR:=$(shell composer config --global cache-dir -q || echo ${HOME}/.composer/cache)

ifneq ("$(wildcard /.dockerenv)","")
    IN_DOCKER:=TRUE
else ifneq ("$(DOCKER_CGROUP)","0")
	IN_DOCKER:=TRUE
else
    IN_DOCKER:=FALSE
endif

ifeq ("$(IN_DOCKER)","TRUE")
	DOCKER_RUN:=
else
	PHP_VERSION:=$(shell docker run --rm -v "`pwd`:`pwd`" jess/jq jq -r -c '.config.platform.php' "`pwd`/composer.json" | php -r "echo str_replace('|', '.', explode('.', implode('|', explode('.', stream_get_contents(STDIN), 2)), 2)[0]);")
	DOCKER_RUN:=docker run --rm -it \
		-v "`pwd`:`pwd`" \
		-v "${COMPOSER_CACHE_DIR}:/home/app/.composer/cache" \
		-w "`pwd`" \
		"ghcr.io/wyrihaximusnet/php:${PHP_VERSION}-nts-alpine-slim-dev"
endif

all: ## Runs everything ###
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | grep -v "###" | awk 'BEGIN {FS = ":.*?## "}; {printf "%s\n", $$1}' | xargs --open-tty $(MAKE)

syntax-php: ## Lint PHP syntax
	$(DOCKER_RUN) vendor/bin/parallel-lint --exclude vendor .

cs-fix: ## Fix any automatically fixable code style issues
	$(DOCKER_RUN) vendor/bin/phpcbf --parallel=$(shell nproc) --standard=./etc/qa/phpcs.xml || $(DOCKER_RUN) vendor/bin/phpcbf --parallel=$(shell nproc) --standard=./etc/qa/phpcs.xml

cs: ## Check the code for code style issues
	$(DOCKER_RUN) vendor/bin/phpcs --parallel=$(shell nproc) --standard=./etc/qa/phpcs.xml

unit-testing: ## Run tests
	$(DOCKER_RUN) vendor/bin/phpunit --colors=always -c ./etc/qa/phpunit.xml
	$(DOCKER_RUN) test -n "$(COVERALLS_REPO_TOKEN)" && test -n "$(COVERALLS_RUN_LOCALLY)" && test -f ./var/tests-unit-clover-coverage.xml && vendor/bin/php-coveralls -v --coverage_clover ./build/logs/clover.xml --json_path ./var/tests-unit-clover-coverage-upload.json || true

shell: ## Provides Shell access in the expected environment ###
	$(DOCKER_RUN) ash

task-list-ci: ## CI: Generate a JSON array of jobs to run, matches the commands run when running `make (|all)` ###
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | grep -v "###" | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "%s\n", $$1}' | jq --raw-input --slurp -c 'split("\n")| .[0:-1]'

help: ## Show this help ###
	@printf "\033[33mUsage:\033[0m\n  make [target]\n\n\033[33mTargets:\033[0m\n"
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[32m%-32s\033[0m %s\n", $$1, $$2}' | tr -d '#'
