@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card p-3 d-flex flex-column align-items-center">
            <h2 class="text-center fw-bold my-3">Historico de chamadas</h2>
            <div class="container-contatos">

                <div class="d-flex flex-column">
                    <div class="contato mx-2 my-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/user.svg')}}" alt="">
                            <div class="d-flex flex-column">
                                <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                <span>Realizada em 30/06</span>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 pb-0" style="margin-right: 10px">10m 18s</p>
                            <p class=" mb-0 pb-0">5:44 AM</p>
                        </div>
                    </div>

                    <div class="contato mx-2 my-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/user.svg')}}" alt="">
                            <div class="d-flex flex-column">
                                <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                <span>Realizada em 30/06</span>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 pb-0" style="margin-right: 10px">10m 18s</p>
                            <p class=" mb-0 pb-0">5:44 AM</p>
                        </div>
                    </div>
                    <div class="contato mx-2 my-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/user.svg')}}" alt="">
                            <div class="d-flex flex-column">
                                <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                <span>Realizada em 30/06</span>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 pb-0" style="margin-right: 10px">10m 18s</p>
                            <p class=" mb-0 pb-0">5:44 AM</p>
                        </div>
                    </div>
                    <div class="contato mx-2 my-3 d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="{{asset('img/user.svg')}}" alt="">
                            <div class="d-flex flex-column">
                                <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                <span>Realizada em 30/06</span>
                            </div>

                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 pb-0" style="margin-right: 10px">10m 18s</p>
                            <p class=" mb-0 pb-0">5:44 AM</p>
                        </div>
                    </div>

                </div>


            </div>
        </div>



@endsection
