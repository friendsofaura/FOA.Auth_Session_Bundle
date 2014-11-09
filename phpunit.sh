if [ -d vendor ]
then
    composer update --dev
fi
phpunit -c tests/unit/
phpunit -c tests/container/
