FROM nginx:1.21-alpine

COPY app.nginx /etc/nginx/conf.d/default.conf
COPY nginx.nginx /etc/nginx/nginx.conf

ARG USER_GID=1000
ARG USER_UID=1000

RUN addgroup -g ${USER_GID} app \
    && adduser -D -s /bin/sh -G app -u ${USER_UID} app

RUN mkdir -p /var/www/html \
    && chown -R app:app /var/www

CMD ["nginx", "-g", "daemon off;"]
