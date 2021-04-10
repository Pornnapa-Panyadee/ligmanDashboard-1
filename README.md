<h1>ligmanDashboard</h1>

# Prepare installation
git — https://git-scm.com/downloads<br>
docker — https://www.docker.com/get-docker<br>
docker-compose — https://docs.docker.com/compose/install/#install-compose<br>

# first setup only once
<code>cd ligmanDashboard</code><br>
<code>cp env-example .env</code><br>
<code>git clone https://github.com/Laradock/laradock.git</code><br>
<code>cp laradock_env/env-example laradock/.env</code><br>


# delete data in database if you change database config (database name)
<code>rm -rf ~/.laradock/data/mysql</code><br>

# start environment after already setup
<code>cd laradock</code><br>
<code>cp env-example .env</code><br>
<code>docker-compose up -d nginx mysql phpmyadmin workspace</code><br>

# go to /var/www workspace
<code>docker-compose exec --user laradock workspace bash</code><br>