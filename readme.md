# Housing data via dynamic table

## Setup

### Prerequisites
You need [Docker](https://www.docker.com/get-started), [docker-compose](https://docs.docker.com/compose/), [Composer](https://getcomposer.org/doc/00-intro.md).

### Setup steps
1. Setup a new project sekeleton from this repository
```
        git clone https://github.com/henryjiang-sfgov/ds-take-home take-come
        cd take-home
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

4. You may now access your site at `https://local.test`

### CSS/JS Development: laravel-mix

1. Begin by installing Laravel Mix through NPM, and then copying the example Mix file to your project root.

```bash
    npm install laravel-mix --save-dev
    cp node_modules/laravel-mix/setup/webpack.mix.js ./
```

2. You should now have the following directory structure:

-   `node_modules/`
-   `package.json`
-   `webpack.mix.js`

`webpack.mix.js` is your configuration layer on top of webpack. Most of your time will be spent here.

3. Run development: npm run watch

### Unit Testing
1. Install [QUnit](http://qunitjs.com/)
```
      npm install --save-dev qunit
```
2. Write your unit tests in the tests/ directory

3. Run unit tests
```
        qunit 'tests/*-test.js'
```

## Further development
This sample project is setup for future development on the Lumen framework. It lays the groundwork to make development easy.
Install additional tools and libraries through composer.


## License

[MIT license](http://opensource.org/licenses/MIT)

```
Laravel and Lumen is a trademark of Taylor Otwell
```
