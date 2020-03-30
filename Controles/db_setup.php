<?php
// Déclaration de la Class
Class Connection{
 Public $conn;

// La Fonction construct permets de créer des attributs de classe dés la création de l'objet
 Public function __construct(){

// variable information pour la connection avec bdsql
 $servername = 'localhost';
 $username = 'root';
 $password = 'root';
 $bdsql ='P4blog';

//On essaie de se connecter
try{
 $conn = new PDO("mysql:host=$servername;dbname=$bdsql", $username, $password);
//On définit le mode d'erreur de PDO sur Exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo 'Connexion réussie';
    }

/*On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci*/
catch(PDOException $e){
 echo "Erreur : " . $e->getMessage();
}
// on ferme la connection sql
$conn = null;
 }
}
?>
