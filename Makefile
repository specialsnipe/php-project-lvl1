install:# Установка
	composer install
validate:# Проверка композера
	composer validate
brain-games:#Запуск брайн геймс
	./bin/brain-games
lint:#Проверка кода линтором
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:#Проверка на четность
	./bin/brain-even
