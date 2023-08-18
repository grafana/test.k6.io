# k6 PHP Play

Simple PHP site to help you familiarize yourself with k6, deployed at https://k6.grafana.fun/ 

## Run in Docker

You can deploy or run this project locally using the [`grafana/test.k6.io` Docker Image](https://hub.docker.com/r/grafana/test.k6.io):

```sh
docker pull grafana/test.k6.io
docker run -p 8080:8080 grafana/test.k6.io
```

> When running on Mac M1, pass the option: `--platform linux/x86_64`  

You should now be able to access it at http://localhost:8080/

For development, start the PHP server from the `static` folder:

```sh
cd static
php -S localhost:8080
```
