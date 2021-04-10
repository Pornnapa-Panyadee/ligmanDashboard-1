ligmanDashboard

# Prepare installation
git — https://git-scm.com/downloads
docker — https://www.docker.com/get-docker
docker-compose — https://docs.docker.com/compose/install/#install-compose

# first setup
cd ligmanDashboard
git clone https://github.com/Laradock/laradock.git

# start environment
cd laradock
docker-compose up -d nginx mysql phpmyadmin workspace

# go to /var/www workspace
docker-compose exec --user laradock workspace bash