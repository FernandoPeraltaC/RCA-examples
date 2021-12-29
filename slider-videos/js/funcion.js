const videos = document.querySelectorAll('.splide__slide>iframe');
const capa = document.querySelectorAll('.splide__slide>.capa');
const principal = document.querySelector('#principal>iframe');
for(let a=0; a<videos.length; a++){
    capa[a].onclick = function(){
        console.log("entro");
        principal.src = videos[a].src;
    }
}