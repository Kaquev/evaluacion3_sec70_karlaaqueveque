# Proyecto Evaluacion3

Este repositorio contiene la siguiente estructura:

Archivo princiapl `index.php`, correspondiente al landing page del proyecto.

## Contenido del archivo

El archivo `index.php` realiza varias tareas:

1. Agrega un evento de envío al formulario con el ID 'formulario-contacto'. Cuando se envía el formulario, se verifica si hay errores. Si no hay errores, se envía el formulario.

2. Agrega un evento de entrada a cada campo requerido en el formulario. Cuando el usuario ingresa datos en un campo requerido, se verifica si el campo está vacío. Si está vacío, se agrega la clase 'is-invalid' al campo y se elimina la clase 'is-valid'. Si no está vacío, se hace lo contrario.

3. Si el campo requerido es un campo de correo electrónico, se verifica si el valor del campo coincide con una expresión regular que define el formato de un correo electrónico. Si no coincide, se agrega la clase 'is-invalid' al campo y se elimina la clase 'is-valid'.

4. Llama a la función `crearTarjetasServicio()` con un objeto JSON que se obtiene de la variable PHP `$respuestaEndpointServicios`. Esta función crea tarjetas de servicio HTML para cada servicio en los datos proporcionados y las agrega al elemento con el ID 'contenido-servicios'.

5. La función `crearTarjetasServicio()` recorre cada servicio en los datos proporcionados. Para cada servicio, crea una tarjeta de servicio HTML y la agrega al elemento con el ID 'contenido-servicios'. Cada tarjeta de servicio contiene una imagen, un título, un texto y un enlace de contacto.

# Guía de uso del componente

## Tarjeta de Servicios

Este componente muestra una lista de servicios obtenidos de una API externa. Las tarjetas de servicios se generan dinámicamente en la sección correspondiente.

Uso:
HTML para la sección de servicios: La sección de servicios tiene un contenedor para insertar las tarjetas de servicios.

```html
<section id="servicios" class="container container_servicios py-5">
  <div class="row">
    <div class="col-12 mt-5 mb-5">
      <h1>NUESTROS SERVICIOS</h1>
    </div>
  </div>
  <div class="row" id="contenido-servicios"></div>
</section>
```

Para crear tarjetas de servicios:
La función crearTarjetasServicio recibe la lista de servicios desde la API y genera el HTML correspondiente para cada tarjeta.
Se invoca automáticamente con los datos obtenidos de la API.

```javascript
crearTarjetasServicio(JSON.parse(<?php echo $respuestaEndpointServicios; ?>));

function crearTarjetasServicio(servicios) {
    servicios.data.forEach(servicio => {
        const contenedorServicios = document.getElementById('contenido-servicios');
        let tarjeta = `
            <div class="card col-6 col-sm-6 col-md-6 col-lg-3">
                <img src="${servicio.imagen}" class="card-img-top" alt="${servicio.nombre}" loading="lazy">
                <div class="card-body">
                    <h5 class="card-title fw-bold">${servicio.nombre}</h5>
                    <p class="card-text">${servicio.texto}</p>
                    <a href="#contacto" class="nav-link btn btn-info btn-block" onclick="llenarCampoServicio('${servicio.nombre}')">Contacto</a>
                </div>
            </div>
        `;
        contenedorServicios.insertAdjacentHTML('beforeend', tarjeta);
    });
}

function llenarCampoServicio(servicio) {
    document.getElementById('servicio').value = servicio;
}

```

## Preguntas Frecuentes

Este componente muestra una lista de preguntas frecuentes obtenidas de una API externa. Las preguntas y respuestas se muestran en un acordeón.

Uso:
HTML para la sección de preguntas frecuentes: La sección tiene un contenedor para insertar las preguntas frecuentes.

```html
<section id="preguntas-frecuentes" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-4 col-sm-4 col-md-3 col-lg-3">
        <figure>
          <img
            src="./assets/img/preguntasFrecuentes.png"
            class="img-fluid"
            alt="" />
        </figure>
      </div>
      <div class="col-8 col-sm-8 col-md-9 col-lg-9 text-end">
        <h2 class="h1 mb-3">Preguntas Frecuentes</h2>
        <div class="accordion" id="accordionExample"></div>
      </div>
    </div>
  </div>
</section>
```

Para crear preguntas frecuentes:
La función crearPreguntasFrecuentes recibe la lista de preguntas desde la API y genera el HTML correspondiente para cada pregunta y respuesta.
Se invoca automáticamente con los datos obtenidos de la API.

```javascript
crearPreguntasFrecuentes(JSON.parse(<?php echo $respuestaEndpointPreguntas; ?>));

function crearPreguntasFrecuentes(preguntas) {
    preguntas.data.forEach(pregunta => {
        const contenedorPreguntas = document.getElementById('accordionExample');
        let tarjeta = `
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse${pregunta.id}" aria-expanded="false" aria-controls="collapse${pregunta.id}">
                        ${pregunta.pregunta}
                    </button>
                </h2>
                <div id="collapse${pregunta.id}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        ${pregunta.respuesta}

```

### Cómo ejecutar el proyecto

Para ejecutar el proyecto, descarga la rama MAIN en tu computadora en un servidor que interprete PHP (como XAMPP en la carpeta htdocs). Este proyecto consume una API creada en PHP.
