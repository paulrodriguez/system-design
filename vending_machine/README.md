# Instructions

run the following to install dependencies
```
docker run --rm --interactive --tty \
--volume $PWD:/app \
composer install
```

code below runs tests
```
docker run --rm --interactive --tty \
--volume $PWD:/app \
-w /app \
php ./vendor/bin/phpunit --bootstrap  vendor/autoload.php tests/ItemHolderTest.php
```
