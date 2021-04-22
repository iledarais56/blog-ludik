// slider
// les images sont a suivre dans une variable slide

var slide = new Array(
    "app/public/Front/images/jeux-slide1.jpg",
    "app/public/Front/images/jeux-slide2.jpg",
    "app/public/Front/images/jeux-slide3.jpg",
    "app/public/Front/images/jeux-slide4.jpg",
    "app/public/Front/images/jeux-slide5.jpg",
    "app/public/Front/images/jeux-slide6.jpg"
    );

// soit une variable numero ayant pour valeur initiale 0
var numero = 0;

//on crée la fonction changeslide avec une variable sens qui permet de faire une boucle sur les images
function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0){
        numero = slide.length - 1
    };
    if (numero > slide.length - 1){
        numero = 0
    };
    document.getElementById("slide").src = slide[numero];//le chemin de l'image est egal au numero de cette image dans la variable slide 
}
// autoplay de 5 sec a partir de l'image 1
setInterval("ChangeSlide(1)", 5000);