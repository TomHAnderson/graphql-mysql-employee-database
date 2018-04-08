Apigility Doctrine Skeleton Application
==============================

Installation
------------

```
docker-compose up
docker/connect
cp config/autoload/local.php.dist config/autoload/local.php
composer install
php public/index.php orm:schema-tool:create
php public/index.php data-fixture:import default
```


API Skeletons, Inc. 
https://apiskeletons.com
