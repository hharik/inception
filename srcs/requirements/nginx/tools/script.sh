#!/bin/bash

openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout ${CERTS_}private/nginx.key -out ${CERTS_}certs/nginx.crt -subj "/C=Ma//O=wordpress/CN=hharik.42.fr"

exec "$@"
