install:
	composer install

brain-games:
	./bin/brain-games

testRead:
	./bin/test2

validate:
	composer validate

init:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime