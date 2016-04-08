## Installation

##### Voici les étapes pour l'installation du projet athleteec avec Vagrant :

```sh
$ git clone https://gitlab.com/Hugopiso/athleteec.git
$ cd athleteec
$ vagrant up
```

Voilà, c'est tout !!! La première fois que vous allez lancer vagrant up, ca va être un peu long (entre 5 et 10min), car il va installer toutes les dépendances automatiquement (apt-get install mysql, apache2,...).

##### Bon, il reste encore 2 minis étapes pour accéder au projet
* Changer le host de votre propre pc (sur windows c'est genre system32/etc/driver/jesaisplus/...) avec exactement cette ip associée à ce nom : 192.168.33.99 athleteec.local
* Le fameux "composer install" (je vous conseil de le faire directement dans la VM avec les commandes suivantes)

```sh
$ vagrant ssh
$ cd /vagrant/www
$ composer install
```

Vous pouvez désormais accéder au projet via http://athleteec.local/app_dev.php

Si vous avez une erreur à cause du cache de ce style : Failed to write cache file "/vagrant/www/var/cache/dev/classes.php" (ce que j'ai eu)
vous pouvez fixer ca en faisant un "sudo nano /etc/apache2/envvars" toujours dans la VM et changer ces 2 lignes comme cela (ligne 15 et 16) :
* export APACHE_RUN_USER=vagrant
* export APACHE_RUN_GROUP=vagrant

##### Petites infos :
* Sur votre VM, le projet sf3 se trouve dans /vagrant/www et en local dans www du git
* Stack : apache2, php56 (non pas 7..), mysql
* Base mysql "athleteec", user -> root, pass -> root
