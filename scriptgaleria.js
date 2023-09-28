document.addEventListener('DOMContentLoaded', function() {
let imagenes = [
    {img:'ima/galeria/1.jpg'},
    {img:'ima/galeria/2.jpg'},
    {img:'ima/galeria/3.jpg'},
    {img:'ima/galeria/4.jpg'},
    {img:'ima/galeria/5.jpg'},
    {img:'ima/galeria/6.jpg'},
    {img:'ima/galeria/7.jpg'},
    {img:'ima/galeria/8.jpg'},
    {img:'ima/galeria/9.jpg'},
    {img:'ima/galeria/10.jpg'},
    {img:'ima/galeria/11.jpg'},
    {img:'ima/galeria/12.jpg'},
    {img:'ima/galeria/13.jpg'},
    {img:'ima/galeria/14.jpg'},
    {img:'ima/galeria/15.jpg'},
    {img:'ima/galeria/16.jpg'},
    {img:'ima/galeria/17.jpg'},
    {img:'ima/galeria/18.jpg'},
    {img:'ima/galeria/19.jpg'},
    {img:'ima/galeria/20.jpg'},
    {img:'ima/galeria/21.jpg'},
    {img:'ima/galeria/22.jpg'},
    {img:'ima/galeria/23.jpg'},
    {img:'ima/galeria/24.jpg'},
    {img:'ima/galeria/25.jpg'},
    {img:'ima/galeria/26.jpg'},
    {img:'ima/galeria/27.jpg'},
    {img:'ima/galeria/28.jpg'},
    {img:'ima/galeria/29.jpg'},
    {img:'ima/galeria/30.jpg'},
    {img:'ima/galeria/31.jpg'},
    {img:'ima/galeria/32.jpg'},
    {img:'ima/galeria/33.jpg'},
];

let contador = 0
    const contenedor = document.querySelector('.slideshow');
    const overlay = document.querySelector('.overlay');
    const galeria_imagenes = document.querySelectorAll('.galeria img');
    const img_slideshows = document.querySelector('.slideshow img');



    contenedor.addEventListener('click', function (event) {
        let atras = contenedor.querySelector('.atras'),
            adelante = contenedor.querySelector('.adelante'),
            img = contenedor.querySelector('img'),
            tgt = event.target
        if (tgt == atras) {
            if (contador > 0) {
                img.src = imagenes[contador - 1].img
                contador--
            } else {
                img.src = imagenes[imagenes.length - 1].img
                contador = imagenes.length - 1
            }
        } else if (tgt == adelante) {
            if (contador < imagenes.length - 1) {
                img.src = imagenes[contador + 1].img
                contador++
            } else {
                img.src = imagenes[0].img
                contador = 0
            }
        }

    })

    Array.from(galeria_imagenes).forEach(img => {
        img.addEventListener('click', event => {
            const imagen_seleccionada = +event.target.dataset.imgMostrar
            img_slideshows.src = imagenes[imagen_seleccionada].img
            contador = imagen_seleccionada
            overlay.style.opacity = 1
            overlay.style.visibility = 'visible'
        })
    })

    var span = document.getElementsByClassName("btn_cerrar")[0];
    span.onclick = function() {
        overlay.style.visibility = "hidden";
    }
})