FROM mysql:latest

COPY init.sql /docker-entrypoint-initdb.d/init.sql
COPY custom.cnf /etc/my.cnf.d/custom.cnf
