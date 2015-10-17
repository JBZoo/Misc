# Misc


Call PHP CS
```
mkdir -p /w/tmp/phpcs/
curl -sS https://raw.githubusercontent.com/JBZoo/Misc/master/phpcs/JBZoo/ruleset.xml > /w/tmp/phpcs/ruleset.xml
phpcs --standard=/w/tmp/phpcs/ruleset.xml ./src/
```
