window.descartarPublicacion = function(){
  let botonClickeado = this; // selecciona el boton
  let idEliminar = botonClickeado.idEliminar; //se verifica el id de que se va eliminar
  let form =new FormData();//agrega los datos al form data seleccionados a traves del id
  form.append("idEliminar",idEliminar);

  axios.post("api/publicacion/delete.php",form) //envia los datos del form data y ejecuta el php
        .then(function(respuesta){
        window.obtenerPublicacion();//muestra los juegos actules
 });

};


window.obtenerPublicacion = function(){//obtiene las Publicaciones y los carga
  axios.get('api/publicacion').then(function(respuesta){
    window.cargarPublicacion(respuesta.data);
  });
};

window.cargarPublicacion = function(publicacion){
   let cuerpo = document.querySelector("#columnas-card"); //creamos el cuerpo donde se crearan los card
   cuerpo.innerHTML = ''; //limpiamos el cuerpo


   for(let i=0; i < publicacion.length; ++i){ //Se recorre el arreglo de publicacion
     let publicacionActual = publicacion[i]; //La publicacion actual ingresada sera igual al indice de la publicacion
     let card = document.createElement('div'); //se crea el div card
     card.classList.add('card'); //se le añade la clase card
     card.style.width = '20rem';

     let cardBody = document.createElement('div');
     cardBody.classList.add('card-body');
     let cardTitle = document.createElement('h5');
     cardTitle.classList.add('card-title', 'tittle','text-dark');
     let parrafo = document.createElement('p');
      parrafo.classList.add('card-text','text-center','mt-3', 'parr');
     let fecha = document.createElement('h5');
     fecha.classList.add('float-right','bg-success','text-white','borde','mb-2','mt-4','mr-5');
     fecha.style.width='60%';



     let cardBody2 = document.createElement('div');
     cardBody2.classList.add('card-body','trans');
     let cardBody3 = document.createElement('div');
     cardBody3.classList.add('card-body','h5','font-weight-bold');
     cardBody3.style.height = '60px';


     let imagen = document.createElement('img');
     imagen.classList.add('card-img-top','rounded-top');
     imagen.style.height= '200px';
     imagen.style.width= '100%';
     let a = document.createElement('a');
     a.classList.add('mb-3','ml-3');
     a.setAttribute('href','construye.php');
     a.innerHTML = 'ver mas';

     let star = document.createElement('div');
     star.classList.add('card-body','ml-5','float-right','star');
     let star2 = document.createElement('div');
     star2.classList.add('rw-ui-container');

     let botonEliminar  = document.createElement('button');
     botonEliminar.classList.add("btn","eliminar",'mb-4', 'ml-4', 'btn-sm');
     botonEliminar.style.float = 'rigth';
     botonEliminar.innerText = "Eliminar"; //se añade el texto eliminar
     botonEliminar.idEliminar = publicacionActual.id; //el id a eliminar sera igual al id de la publicacion actual, el boton esta asociado con el indice de las publicaciones
     botonEliminar.addEventListener('click', window.descartarPublicacion); //el escuchador se ejecuta cuando el usuario de un click en el boton de descartar

     cardTitle.innerText = publicacionActual.titulo; //el card title se le asigna el titulo de la publicacion
     parrafo.innerHTML = publicacionActual.descripcion;//el card title se le asigna la descripcion de la publicacion
     fecha.innerHTML = publicacionActual.fecha;//el card title se le asigna la fecha de la publicacion
     imagen.src=publicacionActual.imagen;


     card.appendChild(imagen);
      card.appendChild(cardBody3);//dentro del card añadimos un card-footer
     card.appendChild(cardBody); //dentro del card añadimos un card-body
     card.appendChild(cardBody2);//dentro del card añadimos un card-footer
     card.appendChild(star);
     cardBody3.appendChild(cardTitle);//dentro del card-body añadimos un card-title
     cardBody.appendChild(parrafo);//dentro del card-body añadimos el parrafo que seria la descripcion
     cardBody.appendChild(fecha); //dentro del card-body añadimos la fecha
     cardBody2.appendChild(botonEliminar);//dentro del card-footer añadimos el boton de eliminar
     cardBody2.appendChild(a);//dentro del card-footer añadimos el boton de eliminar
     star.appendChild(star2);
     cuerpo.appendChild(card);//al cuerpo limpiado se le almacena el card de la publicacion

   }
};


(function(){
  window.obtenerPublicacion();
  tinymce.init({
    selector: '#descripcion-txt'
  });


  window.mostrarErrores = function(errores){
      let cont = document.querySelector(".cont-errores");
      let ul = document.createElement('ul');
      ul.classList.add('alert','alert-warning');
      for (let i = 0; i < errores.length; i++) {
         let error = errores[i];
         let li = document.createElement('li');
         li.textContent = error;
         ul.appendChild(li);
      }
      cont.appendChild(ul);
  };

  document.querySelector("#agregar-btn").addEventListener('click', function(){ //Escuchador
    let errores = []; //Creamos un arreglo de errores
    let titulo = document.querySelector("#titulo-txt").value; //Creamos una variable que se le asigna el valor del titulo con querySelector
    let descripcion = tinymce.get('descripcion-txt').getContent(); //Creamos una variable que se le asigna el valor de la descripcion
    let fecha = document.querySelector("#fecha-dt").value;  //Creamos una variable que se le asigna el valor de la fecha
    let imagen = document.querySelector("#imagen-bob").value;

    if (titulo.length === 0) {
      errores.push('Ingrese un titulo');
    }
    if (descripcion.length === 0) {
      errores.push('Ingrese una descripcion');
    }
    if (fecha.length === 0) {
      errores.push('Ingrese una fecha');
    }





        var pattern =/[a-zA-Z0-9_]*[.](jpg|png|gif)$/i;

        //([A-Z][0-9]).\w+(png|jpg|jpeg);
        if (imagen.length === 0) {
        errores.push('Ingrese una imagen valida');
        }else if (!pattern.test(imagen)) {
        errores.push('Ingrese una extension .png, .jpg, .jpeg que este dentro del la ruta assets/img/');

        }


    let cont = document.querySelector(".cont-errores");
    cont.innerHTML = '';


    if(errores.length === 0){
      let nuevaPublicacion = {};
      nuevaPublicacion.titulo = titulo;
      nuevaPublicacion.descripcion = descripcion;
      nuevaPublicacion.fecha = fecha;
      nuevaPublicacion.imagen = imagen;


      //insertar en la db
      //empaquetan los datos para enviarlas a php
      let formData = new FormData(); //
      formData.append('titulo',nuevaPublicacion.titulo); //recibe el valor del titulo
      formData.append('descripcion',nuevaPublicacion.descripcion);
      formData.append('fecha',nuevaPublicacion.fecha);
      formData.append('imagen',nuevaPublicacion.imagen);

      axios.post('api/publicacion/create.php',formData)//Con la funcion axios se envian los datos a php a create.php
        .then(function(respuesta){//cuando se resuelva la promesa (con then)
          let mensaje = document.querySelector('#mensaje-modal .modal-body .alert'); //
          if (respuesta.data.resultado) {//Si es verdadero
            mensaje.classList.remove('alert-danger');
            mensaje.classList.add('alert-primary');
            mensaje.innerText = respuesta.data.comentario;
          }else{
            mensaje.classList.remove('alert-primary');
            mensaje.classList.add('alert-danger');
            mensaje.innerText = "Fallo en la conexion";
          }
            $("#mensaje-modal").modal("show");
        });
      window.obtenerPublicacion();
    }else{
      window.mostrarErrores(errores);
    }
  });

  document.querySelector("#limpiar-btn").addEventListener('click', function(){
    document.querySelector("#titulo-txt").value = "";
    tinymce.activeEditor.setContent("");
    document.querySelector("#fecha-dt").value ="2020-06-13";
  });


})();
