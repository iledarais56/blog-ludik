//fonctionnalitées générales.

//bouton en savoir plus page accueil

let proposbuton = document.getElementById('aproposbutton');

proposbuton.addEventListener('click',function(){
    let propostext = document.getElementById('apropostext');
    if(propostext.classList.contains('displayed')){
            
        propostext.classList.remove('displayed');
        propostext.classList.add('undisplayed');
    }else{
        propostext.classList.remove('undisplayed');
        propostext.classList.add('displayed');
    }
})

