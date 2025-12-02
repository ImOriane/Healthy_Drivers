# Parking

## Description
Application web permettant d’attribuer automatiquement des places de parking aux membres du personnel, de gérer les réservations et la file d’attente.


## 🛠️ Technologies
- **Backend** : PHP, MySQL
- **Frontend** : HTML5, CSS
- **Framwork**: Laravel

## Installation

### 1. Installation des dépendances système
```bash
sudo apt update
sudo apt install php apache2 mysql-server phpmyadmin
sudo service apache2 start
```

### 2. Configuration d'Apache

Éditez le fichier de configuration du site par défaut :
```bash
sudo vim /etc/apache2/sites-enabled/000-default.conf
```

Ajoutez la configuration suivante dans le fichier :
```apache
<Directory /home/axel/Dev>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```

### 3. Application des permissions et redémarrage d'Apache
```bash
sudo service apache2 restart
sudo chown -R :www-data /home/axel/Dev
chmod +x /home/axel
sudo a2enmod rewrite && sudo systemctl restart apache2
```

### 4. Installation des dépendances du projet
```bash
composer install
npm install
```

### 5. Configuration de Laravel
Cree le fichier .env :
```bash
voir discord pour le readme
```
Générez la clé d'application :
```bash
php artisan key:generate
```

### 6. Configuration de la base de données

Créez l'utilisateur et la base de données MySQL :
```bash
sudo mysql -u root -p
```

Puis exécutez les commandes SQL suivantes :
```sql
CREATE USER 'HealthyDrivers'@'localhost' IDENTIFIED BY 'HealthyDrivers';
CREATE DATABASE HealthyDrivers;
GRANT ALL PRIVILEGES ON HealthyDrivers.* TO 'HealthyDrivers'@'localhost';
FLUSH PRIVILEGES;
exit
```

### 7. Compilation des assets
```bash
npm run dev
```

### 8. Initialisation de la base de données
```bash
php artisan migrate
php artisan db:seed
```

Votre application est maintenant prête à être utilisée !
Accédez-y via votre navigateur à l'adresse :http://127.0.0.1/

## Project Structure
La structure du projet suit une architecture modulaire.
```
Parking/
├── docs
│   
├── .gitignore
│ 
└── README.md
```

## Maquette
- https://www.figma.com/design/A9Rt2tfsoxS0vlKECB24gH/AP-PARKING?node-id=0-1&t=m45QhLQ2OwaM6wH3-1
- [Maquette PNG](docs/Maquette%20parking)

## Documentation
- [MCD](docs/MCD/Capture%20d'écran%202025-10-06%20150532.png)
- [Plan URLS](docs/Plan_URLs.md)

