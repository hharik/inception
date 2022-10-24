# inception 


- this a 42 network project that focus on learning docker / docker compose and writing your own docker images from scratch.

# You then have to set up
* A Docker container that contains NGINX with TLSv1.2 or TLSv1.3 only.
* A Docker container that contains WordPress + php-fpm (it must be installed and configured) only without nginx.
* A Docker container that contains MariaDB only without nginx.
* A volume that contains your WordPress database.
* A second volume that contains your WordPress website files.
* A docker-network that establishes the connection between your containers.
* more things can be found int the subject!!



# Resources and advices

* one thing that helped me to understand the project is to set up the website without using my own images 
     - https://medium.com/swlh/wordpress-deployment-with-nginx-php-fpm-and-mariadb-using-docker-compose-55f59e5c1a
* Understanding Dockerfile && image layers
     - https://www.youtube.com/watch?v=6Er8MAvTWlI&ab_channel=takacsmark
* Docker Cheat Sheet
     - https://kapeli.com/cheat_sheets/Dockerfile.docset/Contents/Resources/Documents/index
* Docker Network
    - https://www.youtube.com/watch?v=bKFMS5C4CG0&t=10s&ab_channel=NetworkChuck
 
* Configure PHP-FPM with NGINX
    - https://www.digitalocean.com/community/tutorials/php-fpm-nginx
    
* Awesome Compose
    - https://github.com/docker/awesome-compose
