# SymfonySandbox - TP 01

Bac à sable Symfony pour tester toutes les commandes et fonctionnalités.

## Mise en place sur la VM

### 1. Connexion à la VM
```bash
ssh utilisateur@172.16.191.254
```

### 2. Accès au DocumentRoot
```bash
cd /var/www/html
```

### 3. Création du projet (si fait manuellement)
```bash
symfony new SymfonySandbox --webapp
cd ./SymfonySandbox
composer require symfony/apache-pack
# → répondre "y" quand demandé
```

### 4. Accès à l'application
- **VM distante** : http://172.16.191.254/SymfonySandbox/public
- **VM locale** : http://172.16.XXX.1/SymfonySandbox/public

### 5. Voir les logs Apache
```bash
tail -f /var/log/apache2/error.log
# Ctrl+C pour quitter
```

## Structure du projet

```
SymfonySandbox/
├── bin/
│   └── console              # Script console Symfony
├── config/
│   ├── bundles.php          # Enregistrement des bundles
│   ├── framework.yaml       # Configuration du framework
│   ├── routes.yaml          # Configuration des routes
│   ├── services.yaml        # Configuration des services
│   └── packages/
│       └── framework.yaml   # Config framework (détail)
├── public/
│   ├── .htaccess           # Réécriture URL pour Apache
│   └── index.php           # Point d'entrée
├── src/
│   ├── Controller/
│   │   ├── HomeController.php
│   │   ├── HelloController.php
│   │   ├── GreetController.php
│   │   ├── MathController.php
│   │   ├── DatetimeController.php
│   │   ├── JsonController.php
│   │   └── StudentController.php
│   └── Kernel.php          # Noyau Symfony
├── templates/
│   ├── base.html.twig      # Template de base
│   ├── home/
│   │   └── index.html.twig
│   ├── hello/
│   │   ├── index.html.twig
│   │   └── name.html.twig
│   ├── greet/
│   │   └── index.html.twig
│   ├── math/
│   │   └── show.html.twig
│   ├── datetime/
│   │   └── index.html.twig
│   ├── json/
│   │   └── index.html.twig
│   └── student/
│       └── index.html.twig
├── var/
│   ├── cache/
│   └── log/
├── .env                    # Variables d'environnement
├── .env.local              # Variables locales (non commitées)
├── composer.json           # Dépendances Composer
├── symfony.lock           # Verrouillage Composer
└── README.md              # Ce fichier
```

## Contrôleurs disponibles

| Route | URL | Description |
|-------|-----|-------------|
| `app_home` | `/` | Page d'accueil avec liens vers tous les contrôleurs |
| `app_hello` | `/hello` | Route simple sans paramètre |
| `app_hello_name` | `/hello/{name}` | Route avec paramètre dynamique |
| `app_greet` | `/greet/{name}/{times}` | Paramètre optionnel avec valeur par défaut |
| `app_math` | `/math/{a}/{b}` | Plusieurs paramètres avec validation |
| `app_datetime` | `/datetime` | Affiche la date/heure courante |
| `app_json` | `/json` | Retourne une réponse JSON |
| `app_student` | `/student` | Affiche les données d'un étudiant |

## Commandes Symfony CLI à tester

```bash
# Lister toutes les commandes
php bin/console list

# Afficher les routes configurées
php bin/console debug:router

# Générer un nouveau contrôleur
php bin/console make:controller NomController

# Vider le cache
php bin/console cache:clear

# Démarrer le serveur de développement
php bin/console server:run
```

## Débogage

- Activation du mode debug : vérifier que `APP_DEBUG=1` dans `.env`
- Logs Apache : `tail -f /var/log/apache2/error.log`
- Logs Symfony : `tail -f var/log/dev.log`

## Notes

- Ce projet utilise **Symfony 7.3** avec **PHP 8.4** minimum
- L'architecture suit le pattern **MVC** (Modèle-Vue-Contrôleur)
- Les routes utilisent l'attribut `#[Route()]` (syntaxe moderne PHP)
- Les templates utilisent **Twig** comme moteur de templating
