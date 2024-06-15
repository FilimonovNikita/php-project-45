install:
	composer install

brain-games:
	php bin/brain-games.php

testRead:
	php bin/test2.php

validate:
	composer validate

init:
	composer exec --verbose phpcs -- --standard=PSR12 src bin