## Description
This application allows you to retrieve a list of test-takers via API call,
using `csv` and `json` files as a data source.

**Use the following links to receive the list of test-takers via API:**

- for `testtakers.csv` file - http://localhost/api/csv;
- for `testtakers.json` file - http://localhost/api/json.

## Installation notes

### Prerequisites:
- php version - `8.0.2`
- docker

### For local installation, follow these steps
1. clone the project running the following command in terminsl `git clone https://github.com/tatsianazh/test-takers-api.git`
2. Move to the project directory `cd test-takers-api`
3. clone `.env.example` file and rename it to `.env`
4. Run `composer install`
5. Run docker containers: `./vendor/bin/sail up`
6. Generate encryption key:
   - go to docker container which uses image `sail-8.2/app` using the following command `docker exec -it [container id] /bin/bash`
   - `php artisan key:generate`

Once the application's Docker containers have been started and encryption key generated, you can access the application in your web browser at: http://localhost.
