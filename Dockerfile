FROM nginx:1.14.0-alpine
RUN apk update && apk upgrade && apk add php5 php5-fpm php5-opcache supervisor
COPY site/ /var/www/test.k6.io/www
COPY config/nginx-test.k6.io.conf /etc/nginx/conf.d/default.conf
COPY config/supervisor.conf /etc/supervisor/supervisor.conf
COPY entrypoint.sh /bin/entrypoint.sh
RUN chmod 777 /bin/entrypoint.sh
EXPOSE 80
CMD ["/bin/entrypoint.sh"]