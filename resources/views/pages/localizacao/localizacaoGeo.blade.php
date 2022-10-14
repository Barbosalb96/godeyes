@extends('layouts.app')

@section('content')
    <div class="container mt-4 d-flex  justify-content-center">
        <div style=" width: 1094px;">
            <div class="card p-4 d-flex align-items-center flex-column">
                <div class="map">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="700px" height="500" style="border-radius: 10px" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=sao%20luis%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="header-geo my-5">
                    <h4>Demilitação Geografica</h4>
                </div>

                <div class="localizacao-list d-flex justify-content-between" style="width: 400px">
                    <p>Local</p>
                    <p>Bloqueado</p>
                    <div class="d-flex">
                        <a href="" class="mx-2"><i class="fas fa-pen"></i></a>
                        <a href="" class="mx-2"><i class="fas fa-times"></i></a>
                    </div>
                </div>
                <div class="localizacao-list d-flex justify-content-between" style="width: 400px">
                    <p>Local</p>
                    <p>Permitido</p>
                    <div class="d-flex">
                        <a href="" class="mx-2"><i class="fas fa-pen"></i></a>
                        <a href="" class="mx-2"><i class="fas fa-times"></i></a>
                    </div>
                </div>
                <div class="localizacao-list d-flex justify-content-between" style="width: 400px">
                    <p>Local</p>
                    <p>Permitido</p>
                    <div class="d-flex">
                        <a href="" class="mx-2"><i class="fas fa-pen"></i></a>
                        <a href="" class="mx-2"><i class="fas fa-times"></i></a>
                    </div>
                </div>
                <div class="localizacao-list d-flex justify-content-between" style="width: 400px">
                    <p>Local</p>
                    <p>Bloqueado</p>
                    <div class="d-flex">
                        <a href="" class="mx-2"><i class="fas fa-pen"></i></a>
                        <a href="" class="mx-2"><i class="fas fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
