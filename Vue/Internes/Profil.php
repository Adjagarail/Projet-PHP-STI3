<?php 
include('../Controller/Connexion.php');
if (isset($_SESSION['ID']) AND isset($_SESSION['Login']))
{
    echo 'Bonjour ' . $_SESSION['Login'];
}