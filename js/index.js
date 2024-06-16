const grande = document.querySelector('.grande')
const punto = document.querySelectorAll('.punto')
//HACER CLICK en todos los puntos saber la posicion del punto 
//aplicar un transform tanslate al grande
//quitar la clase activo de todos los puntos
//aniadir la clase activo del punto que hemos hecho click
punto.forEach((cadaPunto, i) => {
  punto[i].addEventListener('click', () => {

    let posicion = i
    let operacion = posicion * - 33.33333333333
    grande.style.transform = `translateX(${operacion}%)`
    punto.forEach((cadaPunto, i) => {

      punto[i].classList.remove('activo')


    })
    punto[i].classList.add('activo')
  })

});
