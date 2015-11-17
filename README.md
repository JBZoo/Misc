# Misc


Call PHPCS in the ".travis.yml"
```bash
mkdir -p build/misc;
git clone --branch=master https://github.com/JBZoo/Misc.git build/misc;

php vendor/bin/phpcs ./src --standard=build/misc/phpcs/JBZoo/ruleset.xml --report=full;

php vendor/bin/phpmd ./src text --standard=build/misc/phpmd/jbzoo.xml --verbose;
```
