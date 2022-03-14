Exempel de création de BD 

CREATE TABLE tableaux (
   id INT(11) PRIMARY KEY AUTO_INCREMENT,
   name VARCHAR(100),
   painter VARCHAR(100)
);
INSERT INTO tableaux (name, painter) VALUES ("Mona Lisa", "Léonard de Vinci"),("Ecole d'Athènes", "Raphaël"),("Création d'Adam", "Michel-Ange");








DSN Data Source Name 
Aller dans la doc PHP pour trouver le bon PDO -> Pilote PDO 
https://www.php.net/manual/fr/pdo.drivers.php

En fonction du type (Oracle, Mysql, sqlite, Psotgre) le DSN est différent

Exemple 
écrivez le DSN nécessaire pour se connecter à une base de données MySQL dont l'IP du serveur est 192.168.1.36 et dont le nom est projetExo1 
Le DSN pour se connecter à la base de données est : mysql:host=192.168.1.36;dbname=projetExo1;

avec une base de données Oracle hébergée sur le même serveur que votre application. Cette base de données écoute le port 1521, porte le nom projetExo1 et son encodage est UTF-8. 
Le DSN permettant de se connecter à la base de données Oracle est oci:dbname=//localhost:1521/projetExo1;charset=UTF-8

e moteur SQLite sont particulières, puisque l'intégralité de la base est représentée par un fichier .sq3 présent sur le disque. Ce format est très utile pour embarquer des bases de données dans des applications légères. Pour votre projet, la base de données est dans le fichier /var/www/projetExo1/databases/db.sq3
Le DSN permettant de se connecter à la base de données SQLite est : sqlite:/var/www/projetExo1/databases/db.sq3.

