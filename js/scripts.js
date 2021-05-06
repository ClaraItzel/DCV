//querySelector

const heading= document.querySelector('.header__texto h2') //Retorna 0 o 1 elemento
/* heading.textContent= 'Hola k ase?';
heading.classList.add('nueva_class'); */

//querySelectorAll
const enlaces= document.querySelectorAll('.navegacion a');
/* console.log(enlaces); */


//getElemtBuild
const heading2= document.getElementById('heading');
/* console.log(heading2); */
//Generar un nuevo enlace
const nuevoEnlace= document.createElement('A')//SE RECOMIENDA EN MAYUSCULA
//agregar el href
nuevoEnlace.href= 'nuevo-enlace.html'
//agrega el texto
nuevoEnlace.textContent= 'Soy un pollo';
//agrega clase
nuevoEnlace.classList.add('navegacion__enlace');
//agregarlo al documento
/* const navegacion= document.querySelector('.navegacion')
navegacion.appendChild(nuevoEnlace); */


console.log(nuevoEnlace);

//eventos
console.log(1);
window.addEventListener('load', function(){ //load espera a que el javascript y el html esten listos
   imprimir(); 
});
window.onload=function(){
    console.log(3);
}
document.addEventListener('DOMContentLoaded', function(){
    console.log(4);
})
console.log(5);

function imprimir(){
    console.log(2);
}
window.onscroll=function(){
    console.log('Scrolling...');
}
//Seleccionar elementos y asociarles un evento
/* const btnEnviar= document.querySelector('.boton--primario');
btnEnviar.addEventListener('click', function(evento){
    console.log(evento);
    evento.preventDefault();
    //Validar formulario se utiliza para saber si falta algún
    console.log('Enviar formulario');
}) */

//Eventos de Imputs y Text Area
const datos = {
    nombre: '',
    email: '',
    mensaje: ''
}
const nombre= document.querySelector('#nombre');
const email= document.querySelector('#email');
const mensaje= document.querySelector('#mensaje');
nombre.addEventListener('input', leerTexto);
email.addEventListener('input',leerTexto);
mensaje.addEventListener('input',leerTexto);
function leerTexto(evt){
    /* console.log(evt.target.value); */
    datos[evt.target.id]=evt.target.value;
 
   /*  console.log(datos); */
}
//Elemnto de submit
const formulario= document.querySelector('.formulario');
formulario.addEventListener('submit',function(evt){
evt.preventDefault();
//Validacion de formularios
const {nombre, email, mensaje}=datos;
if(nombre==="" || email==="" || mensaje===""){
  MostrarMensaje('Los campos son obligatorios mi ziel4','error');
      return;
}
//Enviar formulario
console.log('Enviando formulario...');
MostrarMensaje('Se ha enviado la información de manera correcta wapo');
});

function MostrarMensaje(msj,error=null){
    const alerta= document.createElement('P');
    alerta.textContent=(msj);
       if(error){
           alerta.classList.add('error')
       }else{
           alerta.classList.add('correct')
       }
       formulario.appendChild(alerta);
       setTimeout(() => {
        alerta.remove();
    }, 4000);
}