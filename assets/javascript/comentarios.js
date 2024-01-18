(() => {
        'use strict'


        const btnb = document.querySelector("[name='b']");
        const texto = document.querySelector('.comentario');




        texto.addEventListener('input', () => {

                texto.style.height = "5px";
                texto.style.height = (texto.scrollHeight) + "px";


        });

 
        btnb.addEventListener('click', (e) => {

                let selecciono=window.getSelection().toString();
                let ntexto=texto.value;
                if(selecciono.length>0){
                var nuevoContenido = ntexto.replace(selecciono,`<b>${selecciono}</b>`);
                
                texto.value = nuevoContenido;
                }



        })




})();