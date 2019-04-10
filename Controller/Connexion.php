<?php 
function Connexion(){
    try{
        $DB = NULL;
        $DB = new PDO('mysql:host=localhost;dbname=Database;charset=utf8','admin','admin');
        $DB -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $DB;
    }
    catch(PDOException $e){
        die('La connexion à la base est impossible'.$e->getMessage());
    }
}
Connexion();
?>