$(document).ready(function(){
    $("#Connexion").click(function(){
        $('.Inscription').hide();
        $('.Connexion').show();
    })
    $("#Inscription").click(function(){
        $('.Inscription').show();
        $('.Connexion').hide();
    })
})
var Inscription = document.getElementById('Inscrit');
var Connexion = document.getElementById('Connect');

Inscription.addEventListener('click',Inscriptions(e));
Connexion.addEventListener('click',Connexions(e))

function Inscriptions(e){
    var Name = document.getElementById('Name');
    var Login = document.getElementById('Login') ;
    var Email = document.getElementById('Email');
    var Password = document.getElementById('Password');
    if(Name.value!=""){
        alert('OK')
    }
    else{
        e.alert('champ vide');
    }
}
function Connexions(){
    // alert('Connexion Marche');
    var Login = document.getElementById('Login');
    var Password = document.getElementById('Password');
}
