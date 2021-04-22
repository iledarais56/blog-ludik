

//autocompletion de l'adresse du formulaire grace à l'API api-adresse data gouv

//on cree un élément ul
    let choix=document.createElement('ul');
    choix.classList.add("absolue");
//puis on crée la fonction a chaque fois que le contenu du champ de adresse est modifié on applique la fonction
    document.querySelector('#adresse').addEventListener('keyup', function (){
//on fait un reset de ul a chaque fois en lui injectant un élément vide
    choix.innerText="";
   
    let adurl = this.value.replaceAll(' ','+');//permet de remplacer les espaces par des + pour l'url
    let url = "https://api-adresse.data.gouv.fr/search/?q="+adurl+"&limit=6&format=json"; 
//variable pour le champ d'autocompletion
    let auto = document.getElementById('adresssugest');
    
    fetch(url,{method:'get'}).then(response => response.json()).then(results => {
//on fait un reset du champ d'adresse        
        choix.innerHtml=[];
//on fait une boucle sur les résultats du fetch(6 fois)
//on crée pour chaque résultat une li avec la classe adresssugest ou on injecte le resultat et on injecte le tout dans l'ul crée précedemment       
            for (let i = 0; i < 6; i++) {
                let currentadress=results.features[i].properties.label;
                let li = document.createElement('li');
                li.classList.add('adresssugest');
                li.innerText=currentadress;
                choix.appendChild(li);
//on crée une fonction pour chaque li qui va injecter la valeur de li a la place de la valeur dans le champ d'adresse et on fait un reset de la ul choix
                li.addEventListener('click',()=>{
                    document.getElementById('adresse').value=currentadress;
                    choix.innerText=[];
                   
                })
             }
        
             auto.appendChild(choix);
    },);
          
});



//checkbox



let formbutton = document.getElementById('formbutton');
let accept = document.getElementById("accept"); 
accept.addEventListener('click', function() {
    
    if(accept.checked==true) {
        formbutton.disabled=false;
    }
    else  {
        formbutton.disabled=true;
    }
    
    
});





