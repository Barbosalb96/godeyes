@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card p-3 d-flex flex-column align-items-center">
            <h2 class="text-center fw-bold my-3">Aplicativos instalados</h2>
            <div class="container-contatos">

                <div class="d-flex flex-column">
                    <div class="contato mx-2 my-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/user.svg')}}" alt="">
                            <div class="d-flex flex-column">
                                <strong class="m-0 p-0">Lorem ipsum</strong>
                                <p class="m-0 p-0">Lorem ipsum</p>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 pb-0" style="margin-right: 10px">Instalado</p>
                        </div>
                    </div>

                    <div class="contato mx-2 my-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/user.svg')}}" alt="">
                            <div class="d-flex flex-column">
                                <strong class="m-0 p-0">Lorem ipsum</strong>
                                <p class="m-0 p-0">Lorem ipsum</p>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 pb-0" style="margin-right: 10px">Instalado</p>
                        </div>
                    </div>

                    <div class="contato mx-2 my-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/user.svg')}}" alt="">
                            <div class="d-flex flex-column">
                                <strong class="m-0 p-0">Lorem ipsum</strong>
                                <p class="m-0 p-0">Lorem ipsum</p>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 pb-0" style="margin-right: 10px">Instalado</p>
                        </div>
                    </div>
                    <div class="contato mx-2 my-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/user.svg')}}" alt="">
                            <div class="d-flex flex-column">
                                <strong class="m-0 p-0">Lorem ipsum</strong>
                                <p class="m-0 p-0">Lorem ipsum</p>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 pb-0" style="margin-right: 10px">Instalado</p>
                        </div>
                    </div>


                </div>


            </div>
        </div>



@endsection
