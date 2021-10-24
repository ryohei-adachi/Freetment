FROM ubuntu:latest

#Install Software
RUN apt-get update && apt-get install -y nginx curl vim net-tools certbot python3-certbot-nginx

#Port
EXPOSE 443 80

ENTRYPOINT ["/usr/sbin/nginx","-g","daemon off;"]