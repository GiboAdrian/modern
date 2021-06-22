@extends('layouts.layout')

@section('title', 'Servicios')

@section('servicios_menu', 'active')

@section('content')
    <script >
        window.onload = function() {        
            var divArt = document.getElementsByName('artesania');
            console.log(divArt);
            divArt[0].style.display="none";            
        }      

        function showModernArt(){
            var divArt = document.getElementsByName('artesania');
            var divMod = document.getElementsByName('modernart');
            divArt[0].style.display="none";   
            divMod[0].style.display="block"; 
        }

        function showArtesania(){
            var divArt = document.getElementsByName('artesania');
            var divMod = document.getElementsByName('modernart');
            divArt[0].style.display="block";   
            divMod[0].style.display="none"; 
        }
    </script>
    <section class="container-fluid content">
        <div class="content-servicios container">
            <!-- Menú -->
            <div class="row justify-content-center">
                <div class="col-10 col-md-12">
                    <nav class="text-center my-5">
                        <button type="button" class="btn btn-primary" onclick="showModernArt()">ModernArt</button>
                        <button type="button" class="btn btn-primary" onclick="showArtesania()">Artesania</button>
                    </nav>
                </div>
            </div>
            <div class="modernart" name="modernart">
                <p>Este es de ModernArt</p>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio ModernArt 1
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio ModernArt 2
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio ModernArt 3
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio ModernArt 4
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio ModernArt 5
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio ModernArt 6
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio ModernArt 7
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio ModernArt 8
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="artesania" name="artesania">
                <p>Este es de Artesania</p>
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="row">
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio Artesania 1
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio Artesania 2
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio Artesania 3
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio Artesania 4
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio Artesania 5
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio Artesania 6
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio Artesania 7
                            </div>
                            <div class="col-md-4 col-12 justify-content-center mb-5">
                                Servicio Artesania 8
                            </div>
                        </div>
                    </div>
                </div>                
            </div> 
        </div>
    </section>

@endsection