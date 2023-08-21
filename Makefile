BUILD_USER       ?= $(shell whoami)@$(shell hostname)
BUILD_DATE       ?= $(shell date -u +"%Y-%m-%dT%H:%M:%SZ")
BUILD_DATE_SHORT ?= $(shell date -u +"%Y%m%d")

GIT_VERSION ?= $(shell git describe --tags --always --dirty)
IMAGE_PREFIX ?= us.gcr.io/kubernetes-dev

APP=test.k6.io

.PHONY: clean
clean:
	rm -rf dist/

.PHONY: build
build: clean
	echo "build done"

.PHONY: sign
drone:
	drone lint .drone.yml --trusted
	drone sign grafana/${APP} --save

.PHONY: docker
docker:
	docker build --build-arg=GIT_VERSION=$(GIT_VERSION) -t $(IMAGE_PREFIX)/${APP} -f Dockerfile .
	docker tag $(IMAGE_PREFIX)/${APP} $(IMAGE_PREFIX)/${APP}:$(GIT_VERSION)

.PHONY: push
push: docker
	docker push $(IMAGE_PREFIX)/${APP}:$(GIT_VERSION)
	docker push $(IMAGE_PREFIX)/${APP}:latest
