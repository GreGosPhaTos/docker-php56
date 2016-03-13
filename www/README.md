# WWW Folder

This folder is a temporary one.

When your're done with the checks, you can change the path in the docker-compose.yml file (volumes),
and build again your containers.


### Info
The info.php output your php info


### Check
Check your components with check.php :

Get composer (will be used for elasticsearch)

```
curl -s http://getcomposer.org/installer | php
```

And then

```
php composer.phar install && php check.php
```
