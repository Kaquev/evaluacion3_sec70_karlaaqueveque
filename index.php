<?php
// Función generica para obtener data de la API
function obtenerDataAPI($endpoint, $token)
{
    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $token));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);
    if (!$resultado) {
        return 'Error al obtener la data ' . curl_error($ch);
    }
    return $resultado;
}

// consumo enpoint servicios
$respuestaEndpointServicios = obtenerDataAPI('http://localhost/backend_unidad2/categoria/', 'get');
$respuestaEndpointServicios = json_encode($respuestaEndpointServicios);
// consumo enpoint preguntas frecuentes
$respuestaEndpointPreguntas = obtenerDataAPI('http://localhost/backend_unidad2/preguntas/', 'get');
$respuestaEndpointPreguntas = json_encode($respuestaEndpointPreguntas);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- se carga la libreria de animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Se carga javascript de Bootstrap -->
    <script src="./assets/js/bootstrap.min.js"></script>

    <title>Energy & Water | Servicios integrales</title>
    <meta name="description" content="Ofrecemos servicios integrales de mantenimiento para edificios">
</head>

<!-- Se esta usando animate.css con las clases animate y animate_fadein para que el body completo tenga un efecto -->

<body class="animate__animated animate__fadeIn">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <img id="logo" src="./assets/img/logov1.png" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#historia">Historia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#equipo">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#preguntas-frecuentes">Preguntas Frecuentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="link-contacto" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="inicio" class="py-5">
        <div class="container container_inicio mt-5">
            <div class="row">
                <div class="col-9 texto_bienvenido">
                    <h1>Bienvenido a Energy and Water.</h1>
                    <p class="mt-5">"Garantizando tu confort y seguridad, Energy and Water se especializa en el
                        mantenimiento
                        integral de
                        edificios,
                        abarcando desde la climatización hasta la gestión de la energía. Con nuestro enfoque
                        especializado en
                        climatización,
                        electricidad y obras menores de construcción, aseguramos el correcto funcionamiento y la
                        eficiencia de
                        tus
                        instalaciones. Desde el mantenimiento preventivo que prolonga la vida útil de tus activos hasta
                        el
                        correctivo que
                        resuelve cualquier inconveniente, nos comprometemos a mantener tu entorno en óptimas
                        condiciones. Con
                        nosotros, tu
                        confort está en buenas manos."</p>
                </div>
                <div class="col-3">
                    <figure>
                        <img src="./assets/img/2.png" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <!-- Contenido de la sección de Inicio -->


        </div>
    </section>

    <section id="historia" class="py-5 bg-light">
        <div class="container">
            <!-- Contenido de la sección de Historia -->

            <div class="row">
                <div class="col-12 col-md-6 gap-2">
                    <h3 class="mb-5">Creando ambientes gratos y confortables a través del mantenimiento</h3>
                    <p>Bienvenido a Energy and Water SpA, empresa dedicada a la instalación y reparación de sistemas de
                        ventilación,
                        calefacción, electricidad y construcción. Contamos con un equipo de profesionales altamente
                        cualificados
                        y con amplia
                        experiencia en el sector. Ofrecemos soluciones a medida para cada cliente, garantizando la
                        calidad y la
                        seguridad de
                        nuestros servicios. Contacta con nosotros y solicita tu presupuesto sin compromiso.</p>
                </div>
                <div class="col-12 col-md-6 px-4">
                    <h3 class="mb-5">¿En qué punto nos encontramos?</h3>
                    <p>
                        Somos una empresa fundada en 2018 con el objetivo de brindar servicios integrales de
                        mantenimiento para
                        hogares,
                        oficinas, comercios e industrias. Nuestra misión es satisfacer las necesidades de nuestros
                        clientes con
                        eficiencia,
                        rapidez y profesionalidad. Nuestra visión es ser la empresa referente en el mercado por nuestra
                        excelencia y compromiso.
                        Nuestros valores son la honestidad, la responsabilidad, el respeto y la innovación.
                    </p>
                </div>
                <div class="col-4 mt-5">
                    <figure>
                        <img src="./assets/img/serv.2.png" alt="Servicios" class="img-fluid">
                        <figcaption class="mt-2 text-center">
                            Reparación de Matriz en CESFAM Padre Pierre Dubois, Pedro Aguirre Cerda.
                        </figcaption>
                    </figure>
                </div>
                <div class="col-4 mt-5">
                    <figure>
                        <img src="./assets/img/servicio2.jpg" alt="Servicios" class="img-fluid">
                        <figcaption class="mt-2 text-center">
                            Universidad de Los Andes
                        </figcaption>
                    </figure>
                </div>
                <div class="col-4 mt-5">
                    <figure>
                        <img src="./assets/img/carousel.vina.cousino.jpg" alt="Servicios" class="img-fluid">
                        <figcaption class="mt-2 text-center">
                            Viña Cousiño Macul
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="container container_servicios py-5">

        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <h1>NUESTROS SERVICIOS</h1>
            </div>
        </div>
        <div class="row" id="contenido-servicios"></div>
    </section>

    <section id="equipo" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <!-- Contenido de la sección de Equipo -->
                    <h2>Compartimos una visión clara del objetivo, fomentamos un clima de confianza,
                        colaboración y
                        apoyo mutuo entre los
                        integrantes del equipo.</h2>
                    <p class="fs-5 mt-5"><strong>Liderazgo</strong></p>
                    <p>Mizraim Abello es el fundador de Energy and Water SpA, es un líder colaborativo que
                        se desempeña
                        en el ámbito laboral,
                        específicamente en el sector de la climatización y electricidad. Practica un liderazgo
                        democrático; es decir, que
                        involucra al equipo de trabajo en la toma de decisiones y valora sus opiniones y sugerencias.
                        Sus principales
                        habilidades como líder son la resolución de problemas, la comunicación efectiva, el pensamiento
                        crítico, la capacidad de
                        coordinación y gestión.</p>
                </div>
                <div class="col-3">
                    <figure>
                        <img src="./assets/img/equipo.png" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-12">
                    <p>Algunos de los logros más destacados son haber participado en la acreditación de los centros de
                        salud de la
                        municipalidad de San Joaquín, reparación del equipo de climatización para el museo de la
                        Universidad de los Andes y
                        haber realizado reparaciones y cambios de grupos electrógenos que son críticos para el
                        funcionamiento de los edificios.
                        Uno de los desafíos que enfrentó como líder fue adaptarse a las nuevas normativas sanitarias por
                        la pandemia y
                        garantizar la seguridad del equipo y los clientes.</p>
                    <p>Lo logró implementando protocolos de prevención y capacitando al personal. Su objetivo como líder
                        es darle continuidad
                        operacional a los clientes y mejorar constantemente los procesos de mantenimiento y calidad.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-5 mb-5">
                    <h2>Nuestro Equipo</h2>
                </div>

                <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                    <figure>
                        <img src="./assets/img/user1.jpg" class="img-fluid rounded-circle grayscale" alt="">
                        <figcaption class="text-center mt-2">Mizraim Abello<br>Gerente General</figcaption>
                    </figure>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                    <figure>
                        <img src="./assets/img/user2.jpg" class="img-fluid rounded-circle grayscale" alt="">
                        <figcaption class="text-center mt-2">Ingrid Suarez<br>Analista de Gestión</figcaption>
                    </figure>
                </div>
                <div class="col-4 col-sm-4 col-md-3 col-lg-2">
                    <figure>
                        <img src="./assets/img/user3.jpg" class="img-fluid rounded-circle grayscale" alt="">
                        <figcaption class="text-center mt-2">Marcelo Fuentes<br>Diseñador Digital</figcaption>
                    </figure>
                </div>
            </div>
        </div>




    </section>

    <section id="preguntas-frecuentes" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-3 col-lg-3">
                    <figure>
                        <img src="./assets/img/preguntasFrecuentes.png" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-9 text-end">
                    <!-- Contenido de la sección de Preguntas Frecuentes -->


                    <h2 class="h1 mb-3">Preguntas Frecuentes</h2>
                    <div class="accordion" id="accordionExample">
                    </div>
                </div>
    </section>


    <section id="testimonios">
        <div class="container text-center">

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/img/user3.jpg" class="rounded-circle shadow-1-strong mb-4" alt="" style="width: 150px;" loading="lazy">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <h5 class="mb-3">Andrés Díaz</h5>
                                <p>CEO & CTO Nexodigital</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                    fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                    doloremque.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/img/user1.jpg" class="rounded-circle shadow-1-strong mb-4" alt="" style="width: 150px;" loading="lazy">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <h5 class="mb-3">Luna Maria Echeverría</h5>
                                <p>Directora de compras Clínica las Condes</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                    fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                    doloremque.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/img/user2.jpg" class="rounded-circle shadow-1-strong mb-4" alt="" style="width: 150px;" loading="lazy">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <h5 class="mb-3">Elizabeth Cifuentes</h5>
                                <p>Gerente operacional</p>
                                <p class="text-muted">
                                    <i class="fas fa-quote-left pe-2"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia
                                    fugit consequatur laudantium velit magnam error. Consectetur distinctio fugit
                                    doloremque.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="contacto" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Contacto</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p class="text-center" id="mensaje-formulario"></p>
                    <form method="post" id="formulario-contacto">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre(*):</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            <div class="valid-feedback">Campo válido</div>
                            <div class="invalid-feedback">Campo inválido</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email(*):</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="valid-feedback">Campo válido</div>
                            <div class="invalid-feedback">Campo inválido</div>
                        </div>
                        <div class="mb-3">
                            <label for="servicio" class="form-label">Servicio(*):</label>
                            <input type="text" class="form-control" id="servicio" name="servicio" required>
                            <div class="valid-feedback">Campo válido</div>
                            <div class="invalid-feedback">Campo inválido</div>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección(*):</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                            <div class="valid-feedback">Campo válido</div>
                            <div class="invalid-feedback">Campo inválido</div>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje(*):</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                            <div class="valid-feedback">Campo válido</div>
                            <div class="invalid-feedback">Campo inválido</div>
                        </div>
                        <!-- Agregamos un campo oculto para usar la tecnica de honey pot para los robots,
                        si el campo tiene valor es que el formulario fue llenado por un robot y no por un ser humano -->
                        <div class="form-group" style="display: none !important">
                            <label for="honeypot_field">No completar</label>
                            <input type="text" id="honeypot_field" name="honeypot_field" class="form-control">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="condiciones" checked disabled>
                            <label class="form-check-label" for="condiciones">
                                Terminos y condiciones
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary" id="send-button">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark py-4">
        <div class="container text-white text-center">
            <p>&copy; 2024 Energy and Water. Todos los derechos reservados.</p>
            <p><i class="bi bi-envelope"></i> info@energyandwater.cl | <i class="bi bi-telephone"></i>+56 9 1234 5678 |
                <i class="bi bi-whatsapp"></i> +56 9 9876
                5432
            </p>
        </div>
        </div>
    </footer>

    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>