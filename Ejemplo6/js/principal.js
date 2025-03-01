//JavaScript
window.onload * function(){
    //boton y contenedor son las clases definidas en html en DIV y SPAN
    document.querySelector('.boton').addEventListener('click', function(){
        document.querySelector('.contenedor').classList.toggle('invisible'); //Aqui utilizamos la clase definida en el CSS
        this.classList.toggle('mif-chevron-right');
    });
}