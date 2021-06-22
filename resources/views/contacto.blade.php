@extends('layouts.layout')

@section('title', 'Contacto')

@section('contacto_menu', 'active')

@section('content')

<div class="content">
    <div class="row">
        <div class="col">
            <h2>¿Está interesado en nuestros servicios? ¡Escríbanos!</h2>
            <form action="">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="nombre" class="form-label label-contacto">Nombre</label>
                        <input type="text" class="form-control formulario-contacto" id="nombre-contacto" placeholder="Nombre y apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label label-contacto">Correo electrónico</label>
                        <input type="email" class="form-control formulario-contacto" id="email-contacto" placeholder="correo@ejemplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="celular" class="form-label label-contacto">Teléfono celular</label>
                        <input type="text" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control formulario-contacto" id="celular-contacto" placeholder="5598125678">
                    </div>
                    <div class="mb-3">
                        <label for="Mensaje" class="form-label label-contacto">¿Cómo podemos ayudarlo?</label>
                        <textarea class="form-control formulario-contacto" id="mensaje-contacto" rows="5" placeholder="Escriba su mensaje"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Enviar mensaje</button>
                    </div>
                    
                </div>
            </form>            
        </div>
        <div class="col">
            <h2>¡Contáctenos!</h2><br><br><br>
            <div class="contact-list">
                <ul>
                    <li>
                        <div class="imgsimb">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('images/icons/phone.png')}}" class="img-fluid" width="60px" alt="">
                                </div>
                                <div class="col">
                                    <span>Teléfonos</span>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-4">
                                    <a href="tel:+5259426628">59-42-66-28</a>
                                </div>
                                <div class="col">
                                    <a href="tel:+5259425156">59-42-51-56</a>
                                </div>
                            </div>
                        </div>
                    </li><br><br>
                    <li>
                        <div class="imgsimb">
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('images/icons/mail.png')}}" class="img-fluid" width="60px" alt="">
                                </div>
                                <div class="col">
                                    <span>Correo electrónico</span>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-2">
                                </div>
                                <div class="col-4">
                                    <a href="mailto:modernart2019@gmail.com?Subject=Contacto%20desde%20pagina">modernart2019@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </li><br><br>
                    
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div style="width: 100%">
        <h2>Visite nuestra oficina.</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.3232466639553!2d-98.8846627708305!3d19.31308866481938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ce1f2261c0057f%3A0xf556bf38a6275b4!2sDirecci%C3%B3n%20General%20de%20Desarrollo%20Econ%C3%B3mico%20Ixtapaluca.!5e0!3m2!1ses!2smx!4v1622506413821!5m2!1ses!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endsection