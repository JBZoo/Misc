# Misc


Call PHP CS
```
mkdir -p build/misc
git clone --branch=master https://github.com/JBZoo/Misc.git build/misc;
php vendor/bin/phpcs ./src --standard=build/misc/phpcs/JBZoo/ruleset.xml --report=full;
```
