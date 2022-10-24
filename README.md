# inception 


- this a 42 network project that focus on learning docker / docker compose and writing your own docker images from scratch.

# You then have to set up:
* A Docker container that contains NGINX with TLSv1.2 or TLSv1.3 only.
* A Docker container that contains WordPress + php-fpm (it must be installed and configured) only without nginx.
* A Docker container that contains MariaDB only without nginx.
* A volume that contains your WordPress database.
* A second volume that contains your WordPress website files.
* A docker-network that establishes the connection between your containers.
* more things can be found int the subject!!
