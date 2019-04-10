<?php
    require_once('Controller/Connexion.php');
?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenue sur notre plateforme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Vue/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Vue/assets/css/style.css">
</head>
<body class="container-fluid">
    <div class="row">
            <div class="col-md-6 part_One">

            </div>
            <div class="col-md-6 part_Two Inscription">
                <h2 class="display-5 text-center text-justify entete">Inscription</h2>
                    <small class="form-text text-muted text-center text-justify mut"> L'inscription est gratuite et le restera pour toujours</small>
                <form class="col" method="POST" action="Controller/Traitement.php">
                    <div class="form-group stylish">
                        <label for="" class="info"> Nom Complet </label>
                        <input class="form-control placeholder" id="Name" name="Name" type="text" placeholder="Votre Nom Complet">
                    </div>
                    <div class="form-group stylish">
                        <label for="" class="info"> Pseudo </label>
                        <input class="form-control placeholder" id="Login" name="Login" type="text" placeholder="Votre Pseudo">
                    </div>
                    <div class="form-group stylish">
                        <label for="" class="info"> Email</label>
                        <input class="form-control placeholder" id="Email" name="Email" type="email" placeholder="Votre Email">
                    </div>
                    <div class="form-group stylish">
                        <label for="" class="info"> Mot de passe</label>
                        <input class="form-control placeholder" id="Password" name="Password" type="password" placeholder="*******">
                    </div>
                    <div class="form-group stylish">
                        <label for="" class="info"> Votre Statut </label>
                        <select id="inputState" name="Title" class="form-control placeholders">
                                <option class="placeholder" value="1">Etudiant(e)</option>
                                <option class="placeholder" value="2">Professeur</option>
                        </select>
                    </div>
                    <div class="form-group stylish form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label right" for="exampleCheck1">j'ai lu et j'accepte les conditions générales d'utilisation</label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg create stylish" id="Inscrit" name="Inscription" type="submit">Creer un compte</button>
                    <div class="text-center">
                        <a class="text-center compte" href="#" id="Connexion">J'ai deja un compte</a>
                    </div>
                </form>
            </div>
            <div id="Connexion" class="col-md-6 part_Two Connexion">
                <h2 class="display-5 text-center text-justify entete">Connexion</h2>
                    <small class="form-text text-muted text-center text-justify mut"> Veuillez entrer vos informations de connexion </small>
                    <div class="boom">
                    <form method="POST" action="Controller/Traitement.php">
                    <div class="form-group stylish">
                        <label  class="info" for=""> Pseudo </label>
                        <input type="text" class="form-control placeholder" placeholder="Votre Pseudo">
                    </div>
                    <div class="form-group stylish">
                        <label  class="info" for=""> Mot de passe </label>
                        <input type="password" class="form-control placeholder" placeholder="********">
                    </div>
                    <div class="form-group stylish form-check">
                        <input  type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label right" for="exampleCheck1"> Se Souvenir de Moi</label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg create stylish" id="Connect" name="Success" type="submit"> Se Connecter </button>
                    <div class="text-center">
                        <a href="#" class="compte" id="Inscription"> Pas encore inscrit? Cliquez ici !</a>
                    </div>
                    </form>
                    </div>
            </div>
    </div>

    <!-- Le Javascript -->
    <script src="Vue/assets/js/bootstrap.min.js"></script>
    <script src="Vue/assets/js/jQuery.min.js"></script>
    <script src="Vue/assets/js/poper.min.js"></script>
    <script src="Vue/assets/js/main.js"></script>
</body>
</html>