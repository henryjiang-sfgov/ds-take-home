# Housing data via dynamic table

## Setup

### If you want to use Docker for development
### Prerequisites
You need [Docker](https://www.docker.com/get-started), [docker-compose](https://docs.docker.com/compose/), [Composer](https://getcomposer.org/doc/00-intro.md).

### Setup steps
1. Setup a new project sekeleton from this repository
```
        cp .env.example .env
        composer install
```

2. Setup your ip loopback for proper IP resolution with Docker: ./bin/initloopback
```
        cd docker
        ./bin/initloopback

```

3. Start your Docker containers with:
```
        docker-compose up -d
```

4. To compile Sass stylesheets, run `npm run watch`

5. You may now access your site at `https://local.test`

### Unit Testing
1. Navigate to the src/docker directory and spin up docker as normal
```
        docker-compose up -d
```
2. List your docker containers and get the id of your db
```
        docker ps
```
3. Inspect your database container and write down the db's IPAddress
```
        docker inspect docker_db_1
```
4. Navigate to the src directory and edit codeception.yml
```
		modules:
			enabled:
				- Db:
					dsn: 'mysql:host=put ip address from earlier here;dbname=webform'
					user: 'root'
					password: 'yourpassword'
```
5. Run bash from your php docker container
```
        docker exec -it docker_apache_php_1 /bin/bash
```
6. From /var/www/html execute unit tests
```
		vendor/bin/codecept run unit
```


## Deployment to Heroku

A pipeline has been setup for this project on Heroku that connects to the github repo. Every push to the branch you specify here will deploy a new version of this app.

## License

[MIT license](http://opensource.org/licenses/MIT)

```
Laravel and Lumen is a trademark of Taylor Otwell
```
