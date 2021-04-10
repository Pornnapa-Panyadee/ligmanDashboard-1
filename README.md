<h1>ligmanDashboard</h1>

# Prepare installation
git — https://git-scm.com/downloads<br>
docker — https://www.docker.com/get-docker<br>
docker-compose — https://docs.docker.com/compose/install/#install-compose<br>

# first setup
<code>cd ligmanDashboard</code><br>
<code>cp env-example .env</code><br>
<code>git clone https://github.com/Laradock/laradock.git</code>

# start environment
<code>cd laradock</code><br>
<code>cp env-example .env</code><br>
<code>docker-compose up -d nginx mysql phpmyadmin workspace</code>

# go to /var/www workspace
<code>docker-compose exec --user laradock workspace bash</code>