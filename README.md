<h1>ligmanDashboard</h1>

# Prepare installation
git — https://git-scm.com/downloads<br>
docker — https://www.docker.com/get-docker<br>
docker-compose — https://docs.docker.com/compose/install/#install-compose<br>

# first setup only once
<code>git clone https://github.com/Wanarut/ligmanDashboard.git</code><br>
<code>cd ligmanDashboard</code><br>
<code>cp env-example .env</code><br>
<code>git clone https://github.com/Laradock/laradock.git</code><br>
<code>cp laradock_env/env-example laradock/.env</code><br>

# delete data in mysql if you change mysql config (database name)
<code>cd laradock</code><br>
<code>docker-compose stop mysql</code><br>
<code>rm -rf ~/.laradock/data/mysql</code><br>
<code>docker-compose build --no-cache mysql</code><br>

# start environment after already setup
<code>cd laradock</code><br>
<code>docker-compose up -d nginx mysql phpmyadmin workspace</code><br>

# go to /var/www workspace and exit
<code>docker-compose exec --user laradock workspace bash</code><br>
<code>exit</code><br>

# install laravel package
<code>composer update</code><br>
<code>php artisan key:generate</code><br>

# test command add user admin in /var/www workspace
<code>php artisan migrate --seed</code><br>

# stop environment
<code>docker-compose stop</code><br>

# shutdown environment
<code>docker-compose down</code><br>
