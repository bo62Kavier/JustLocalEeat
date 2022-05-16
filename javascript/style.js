var titres = [
    'Just Local Eeat',
    'Just Local Eeat',
    'Soyez le bienvenue',
];

var animations = [
    'animate__animated animate__backInLeft',
    'animate__animated animate__backInRight',
    'animate__animated animate__backInDown',

];

var ptitres = [
    'Consommation Local Naturel et Bio',
    'Livraison rapide et sécurisée sans vous déplacer',
    'Sur votre plateforme de vente des produits Locaux',
];

var titre = document.getElementById('titre');
var detail = document.getElementById('detail');

var i = 1; 
           
setInterval( function () {
    if (i == titres.length) { i = 0; }
    
    titre.textContent = titres[i];
    titre.classList = animations[i];
    detail.textContent = ptitres[i];

    i++;         
}, 6000);
        
