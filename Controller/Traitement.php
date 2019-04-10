<?php 
    //Connexion a la base de données
 include('Connexion.php');

    // Insertion dans la base de données
   if(isset($_POST['Inscription'])){
       if(!empty($_POST['Name']) && !empty($_POST['Login']) && !empty( $_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['Title'])){
            function Insert(){
                $DB = Connexion();
                $Requete = $DB -> prepare('INSERT INTO Utilisateurs(Name, Login, Email, Password, Title) VALUES(:Name, :Login, :Email, :Password, :Title)');
                $Requete->execute([
            'Name'=>$_POST['Name'],
            'Login'=>$_POST['Login'],
            'Email'=>$_POST['Email'],
            'Password'=>password_hash($_POST['Password'],PASSWORD_BCRYPT),
            'Title'=>$_POST['Title'],
        ]);
        $Operation = $Requete->fetch();
        return $Operation;
    }
    Insert();
    header('location:../index.php');
       }
       else{
           echo('Des champs du formulaire sont vide');
       }
   }
//    Connexion a la session
   if(isset($_POST['Success'])){
       if(!empty($_POST['Login']) && !empty($_POST['Password'])){
           function Connect(){
               $DB = Connexion();
               $Log = $DB -> prepare('SELECT * FROM Utilisateurs WHERE Login = ?');
               $Log ->execute([$Login]);
               if($Log-> rowCount() !=0 ){
               }
           }
       }
   }