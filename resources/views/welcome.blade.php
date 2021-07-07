<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ModernArt</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('assets/logo.ico') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

    <script src="js/scripts.js"></script>

    <link href="{{ asset('css/styles_new.css') }}" rel="stylesheet" />
</head>

<body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a href="#" class="navbar-brand">
                <img src="{{ asset('assets/img/logo.png') }}" width="230" alt=""
                    class="d-inline-block align-middle mr-2">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyects">Proyectos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">TODO LO QUE IMAGINES</h1>
                    <h1 class="text-white font-weight-bold">LO CONSTRUIMOS</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5 mt-1" align="justify">
                        Somos una constructora mexicana con más de 10 años de experiencia. Contamos con arquitectos,
                        ingenieros y demás personal calificado en normas de calidad y satisfacción para nuestros
                        clientes.
                    </p>
                    <a class="btn btn-primary btn-xl" href="#about">CONOCE MÁS</a>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center text-white mt-0">Nosotros</h2>
            <hr class="divider divider-light" />
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-5 text-center">
                    <img class="mb-4 rounded" src="{{ asset('assets/img/sample_1.png') }}" alt="Not found"
                        width="420px" height="320px">
                    <h2 class="text-white mt-0">Misión</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white" align="justify">
                        Somos una empresa constructora dedicada a la construcción de proyectos de arquitectura y obra
                        civil, en el ámbito público y privado, cuya misión es satisfacer las necesidades de nuestros
                        clientes antes, durante y después de término del proyecto. Cumplimiendo con los estándares
                        de calidad y plazos fijados por éste, satisfaciendo a nuestros clientes por medio de la
                        exigencia en el control de calidad de nuestros productos terminados.
                    </p>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 text-center">
                    <img class="mb-4 rounded" src="{{ asset('assets/img/sample_2.jpg') }}" alt="Not found"
                        width="420px" height="320px">
                    <h2 class="text-white mt-0">Visión</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white" align="justify">
                        Ser la constructora de referencia a nivel regional, liderando el mercado por medio de la
                        responsabilidad y eficiencia, cumpliendo cada uno de los trabajos encomendados para lograr que
                        nuestro personal esté motivado y orgulloso de pertenecer a nuestra organización, fomentando el
                        control y la calidad de nuestros servicios, buscando siempre dar más de sí mismos y con esto
                        obtener la satisfacción del cliente siendo diversificados e integros, comprometidos y admirados
                        por la capacidad de crear valor y de innovar para dar respuesta a las nuevas necesidades
                        sociales.
                    </p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container px-4 px-lg-5">
            <h2 class="text-center text-white mt-0">Valores</h2>
            <hr class="divider divider-light" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-trophy fs-1 text-white"></i></div>
                        <h3 class="h4 mb-2">Calidad</h3>
                        <p class="text-white mb-0">
                            Satisfacer las necesidades de nuestros clientes es el principio motor de todos nuestros proyectos.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-people fs-1 text-white"></i></div>
                        <h3 class="h4 mb-2">Confianza</h3>
                        <p class="text-white mb-0">
                            Deseamos que tanto nuestro personal y sus familias como nuestros clientes y proveedores 
                            mantengan su confianza en nosotros y en sus objetivos, involucrándolos en ellos, en un 
                            marco de colaboración y beneficio mutuo.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-stars fs-1 text-white"></i></div>
                        <h3 class="h4 mb-2">Innovación</h3>
                        <p class="text-white mb-0">
                            Creemos firmemente como pilar de crecimiento contar con la innovación y rápida adaptabilidad
                            a la utilización de los recursos mejores y más modernos que ofrece el mercado, para facilitar
                            el cumplimiento de los objetivos propuestos en cada uno de los desarrollos.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-white"></i></div>
                        <h3 class="h4 mb-2">Honestidad</h3>
                        <p class="text-white mb-0">
                            Basamos nuestras acciones y compromisos en la verdad para garantizar la confianza de
                            nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0 text-white">Servicios</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5 mt-4 justify-content-ceter">
                <div class="col-md-12 text-center">
                    <button type="button" class="btn btn-light btn-xl" onclick="showModernArt()">ModernArt</button>
                    <button type="button" class="btn btn-light btn-xl" onclick="showArtesania()">Artesania</button>
                </div>
            </div>
            <div name="modernart" id="modernart">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_2.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Diseño Arquitectónico</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_3.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Diseño Estructural</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_4.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Construcción de obra cívil</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_5.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Instalación de CCTV</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_6.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Suministro, fabricación y instalación de aluminio</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_7.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Remodelación y Acabados</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_8.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Construcción de Arcotechos</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_9.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Concreto Estampado</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div name="artesania">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h2 class="text-white font-weight-bold">Artesania México</h2>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5 mt-1" align="justify">
                            Artesania México es nuestra empresa hermana dedicada a la fabricación y venta de 
                            materiales para todo tipo de construcciones.
                        </p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_10.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Venta de Concreto Premezclado</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_11.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Venta de Materiales de Construcción</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_12.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Venta y Colocación de Malla Ciclónica</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_13.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Venta de PVC y CPVC Hidráulico</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_14.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Colocación de Cercas Electrificadas</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2 contenedor"><img class="img-fluid imagen" src="{{ asset('assets/img/sample_15.jpg') }}" alt="" /></div>
                            <h3 class="h4 mb-2 text-white">Venta de Perfiles Metálicos Estructurales</h3>
                            <p class="text-muted mb-0">
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section" id="proyects">
        <h2 class="text-center mt-0 text-white">Proyectos</h2>
        <hr class="divider" />
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box" href="{{asset($post->featured)}}" title="{{$post->title}}">
                                <img class="img-fluid" src="{{asset($post->featured)}}" alt="{{$post->title}}" />
                                <div class="portfolio-box-caption">
                                    <div class="project-category text-white-50">{{$post->category->name}}</div>
                                    <div class="project-name">{{$post->title}}</div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <br><br>
        <h2 class="text-center mt-0 text-white">Nuestros clientes</h2>
        <hr class="divider" />
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/img/clients/edo.jpg') }}" class="d-block client" alt="..." style="width:33%; height: 100px">
                <img src="{{ asset('assets/img/clients/alcaldia.jpg') }}" class="d-block client" alt="..." style="width:33%; height: 100px">
                <img src="{{ asset('assets/img/clients/conagua.jpg') }}" class="d-block client" alt="..." style="width:33%; height: 100px">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/clients/camara.jpg') }}" class="d-block client" alt="..." style="width:33%; height: 100px">
                <img src="{{ asset('assets/img/clients/comision.jpg') }}" class="d-block client" alt="..." style="width:33%; height: 100px">
                <img src="{{ asset('assets/img/clients/bonafont.jpg') }}" class="d-block client" alt="..." style="width:33%; height: 100px">
              </div>
            </div>
          </div>
    </section>

    <section class="page-section pb-3" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-12 col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Contáctanos</h2>
                    <hr class="divider" />
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 mb-5 align-items-center">
                <div class="col-md-5 justify-content-center">
                    <p class="text-muted mb-2 text-center">
                        ¿Requieres una cotización?
                    </p>
                    <p class="text-muted mb-5 text-center">
                        Envíanos tus datos y nos pondremos en contacto contigo
                    </p>
                    <form id="contactForm" action="{{ route('user.message') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="name" type="text" />
                            <label for="name">Nombre completo
                                <span class="text-danger">*</span>
                            </label>
                            {{-- <div class="invalid-feedback">{{ msg }}</div> --}}
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="email" type="email" />
                            <label for="email">Correo electrónico
                                <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phone" type="text" />
                            <label for="phone">Número telefónico
                                <span class="text-danger">*</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="message" type="text" style="height: 10rem"></textarea>
                            <label for="message">Mensaje
                                <span class="text-danger">*</span>
                            </label>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">
                                Envíar
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 justify-content-center">
                    <div class="row mx-2 text-center">
                        <p class="text-muted mb-1">
                            <i class="bi bi-phone"></i>
                            Teléfonos
                        </p>
                        <p class="mx-4">
                            <a href="tel:+5259426628">59-42-66-28</a>
                            <a class="mx-5" href="tel:+5259425156">59-42-51-56</a>
                        </p>
                    </div>
                    <div class="row mx-2 text-center">
                        <p class="text-muted mb-1">
                            <i class="bi bi-envelope"></i>
                            Correo electrónico
                        </p>
                        <p>
                            <a
                                href="mailto:modernart2019@gmail.com?Subject=Contacto%20desde%20pagina">modernart2019@gmail.com</a>
                        </p>
                    </div>
                    <div style="width: 100%;">
                        <p class="text-muted text-center">
                            Visita nuestras oficinas
                        </p>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.3232466639553!2d-98.8846627708305!3d19.31308866481938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1f2261c0057f%3A0xf556bf38a6275b4!2sDirecci%C3%B3n%20General%20de%20Desarrollo%20Econ%C3%B3mico%20Ixtapaluca.!5e0!3m2!1ses!2smx!4v1622506413821!5m2!1ses!2smx"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-light py-5">
        <div class="page-section justify-content-center align-items-center pb-0 pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="">
                            <div class="small text-center text-muted">Copyright &copy; 2021 - Modern Art</div>
                        </div>
                        <div class="mt-2">
                            <div class="small text-center text-muted">Todos los derechos reservados</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <div class="text-center text-muted">Redes sociales</div>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary" href="">
                                <i class="media bi bi-facebook"></i>
                            </a>
                            <a class="btn btn-primary" href="">
                                <i class="media bi bi-whatsapp"></i>
                            </a>
                            <a class="btn btn-primary" href="">
                                <i class="media bi bi-linkedin"></i>
                            </a>
                            <a class="btn btn-primary" href="">
                                <i class="media bi bi-instagram"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
