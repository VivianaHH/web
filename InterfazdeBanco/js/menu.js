$(document).ready(main);


let currentSlide = 0;
const slides = document.querySelector('.imagenes');
const totalSlides = slides.children.length;

function showSlide(index) {
  const slideWidth = slides.children[0].clientWidth + 0; // Ancho de la imagen más márgenes
  slides.style.transform = `translateX(${-index * slideWidth}px)`;
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides; 
  showSlide(currentSlide);
}

setInterval(nextSlide, 1000); // Ajustar el intervalo de tiempo según sea necesario



var contador=1;
function main(){
    $('.menu_bar').click(function(){

        if(contador==1)
        {
            $('nav').animate({
                right:'0'
            });
            contador=0;
        }else{
            contador=1;
            $('nav').animate({
                right:'-100%'
            });
        }

       

    });
};