## 2 Github ? 
* Nous avons rencontré des probèmes lorqu'on a voulu merge les branches car étant donné que la plupart des fichiers dans le main étaient changé cela à créer un "clone" du fichier 
* On a donc crée un nouveau dépôt sur lequel on a seulement commit les dernières modifications du dépôt précédent (principalement le css et user.php)
## Pourquoi peut-on utiliser seulement id="dorian" mdp="dorian" ?
* Sur la page connexion, les seuls identifiants qui nous permettent d'arriver sur la bonne page sont ceux de "dorian" "dorian"
* Aucune idée du pourquoi étant donné que nous avons bien rempli les enregistrements dans la table admin et ils apparaissent bien avec un var_dump($_POST)
## user.php ne retrouve pas les identifiants dans la table clients 
* Encore une fois, les enregistrements sont bien pris en compte dans la table clients lors de l'inscription mais sont inexploitable par user.php
* Nous avons réussi à nous connecter une seule fois avec des identifiants crées mais impossible de le refaire
## Disparité des commit 
* Les principaux commit ont été fait sur le dépôt de "Dmaury26" mais pour ne pas se "marcher dessus" nous avons décidé que seulement 2 personnes feraient des commit sur la branche principale mais sans jamais modifier des fichier sur lesquels le deuxième travaille
* Une autre personne était chargé de faire tourner le fichier sur Wamp sans utiliser le dossier partagé sur git pour "tester" sans corrompre les fichiers
* Evidemment, lors du dernier commit, les branches n'ont pas merge correctement et notre dépôt affichait les 2 projets (dossier) séparémment dans la même branche 
