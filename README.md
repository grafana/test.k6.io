# test.k6.io

# Local testing
cd test.loadimpact.com/
docker build -t testsite . && docker run -p 80:80 testsite