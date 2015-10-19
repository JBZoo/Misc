# Misc


Call PHPCS in the ".travis.yml"
```
script:
  # Check PHP Code Standarts
  - sh -c 'if [ "$TRAVIS_PHP_VERSION" = "5.6" ]; then
        mkdir -p build/misc;
        git clone --branch=master https://github.com/JBZoo/Misc.git build/misc;
        php vendor/bin/phpcs ./src --standard=build/misc/phpcs/JBZoo/ruleset.xml --report=full;
    fi;'
```
