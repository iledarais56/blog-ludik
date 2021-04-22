// menu burger//


var burger = document.querySelector('#burger')
var ul = document.querySelector('ul')
//au clic sur l'element ayant l'id burger l'element ul prend la classe switch et inversement
    burger.addEventListener('click',() => {
        ul.classList.toggle('switch')
    })