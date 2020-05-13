# test.k6.io
Simple PHP site we (ab)use as a target for load testing.

### Local testing

```
cd test.k6.io/
docker build -t testsite . && docker run -p 80:80 testsite
```