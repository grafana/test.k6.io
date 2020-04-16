# ##WEB_HOSTNAME##

# Local testing
cd test.loadimpact.com
docker build -t testsite . && docker run -p 80:80 testsite