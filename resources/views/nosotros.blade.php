@extends('layouts.layout')

@section('title', 'Nosotros')

@section('nosotros_menu', 'active')

@section('content')
    <div class="imgnts">
        <img class="img-fluid img-fondo" src="https://images.unsplash.com/photo-1503708928676-1cb796a0891e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=667&q=80" alt="">
    </div>
    <section class="container-fluid content">
        <div class="content-nosotros container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <br><br>
                    <h4 class="title4-long-responsive-section izq blue font-bold text-uppercase">MISIÓN</h4>
                    <p>Somos una empresa constructora dedicada a la
                        construcción de proyectos de Arquitectura y
                        obra civil, en el ámbito público y privado, cuya
                        misión es satisfacer las necesidades de
                        nuestros clientes antes, durante y después de
                        finalizado el proyecto. Dando cumplimiento a
                        los estándares de calidad y plazos fijados por
                        éste, satisfaciendo a nuestros clientes por
                        medio de la exigencia en el control de calidad
                        de nuestros productos terminados.
                    </p>
                    <div id="carousel1" class="carousel slide carousel-nts" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <figure>
                                    <img class="img-fluid rounded d-block m-l-none" alt="Img 2" src="https://images.pexels.com/photos/159306/construction-site-build-construction-work-159306.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure>
                                    <img class="img-fluid rounded d-block m-l-none" alt="Img 2" src="https://images.pexels.com/photos/416405/pexels-photo-416405.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure>
                                    <img class="img-fluid rounded d-block m-l-none" alt="Img 2" src="https://images.pexels.com/photos/439416/pexels-photo-439416.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure>
                                    <img class="img-fluid rounded d-block m-l-none" alt="Img 2" src="https://images.pexels.com/photos/2219024/pexels-photo-2219024.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260">
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                    
                    <div id="carousel2" class="carousel slide carousel-nts" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <figure>
                                    <img class="img-fluid rounded d-block m-l-none" alt="Img 2" src="https://images.pexels.com/photos/392031/pexels-photo-392031.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure>
                                    <img class="img-fluid rounded d-block m-l-none" alt="Img 2" src="https://cdn.pixabay.com/photo/2020/03/12/13/42/engineer-4925140_960_720.jpg">
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure>
                                    <img class="img-fluid rounded d-block m-l-none" alt="Img 2" src="https://images.pexels.com/photos/110469/pexels-photo-110469.jpeg?cs=srgb&dl=pexels-energepiccom-110469.jpg&fm=jpg">
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <figure>
                                    <img class="img-fluid rounded d-block m-l-none" alt="Img 2" src="https://images.pexels.com/photos/6615235/pexels-photo-6615235.jpeg?cs=srgb&dl=pexels-tima-miroshnichenko-6615235.jpg&fm=jpg">
                                </figure>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <h4 class="title4-long-responsive-section izq blue font-bold text-uppercase">VISIÓN</h4>
                    <p>Ser la empresa constructora de referencia a nivel regional, liderando el mercado por
                        medio de la responsabilidad, y eficiencia, cumpliendo a tiempo con todos y cada uno
                        de los trabajos encomendados, lograr que todo nuestro personal se sienta motivado y
                        orgulloso de pertenecer a nuestra organización, fomentando el control y la calidad en
                        el servicio, buscando siempre dar mas de si mismos y con esto lograr la satisfacción del
                        cliente. Una empresa diversificada e integrada, comprometida y admirada por su
                        capacidad de crear valor y de innovar para dar respuesta a las nuevas necesidades
                        sociales.
                    </p>                        
                </div>
            </div>
        </div>
    </section>

@endsection