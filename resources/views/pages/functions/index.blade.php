@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card p-3 d-flex flex-column align-items-center">
            <h2 class="text-center fw-bold my-3">Agenda de Contatos</h2>
            <div class="container-contatos">


                @foreach($contacts as $contact)
                    <div class="d-flex flex-column">
                        <a href="{{route('contato_detail',$contact->id)}}">
                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">{{$contact->name}}</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone={{$contact->numero}}&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone={{$contact->numero}}&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>
                        </a>

                        @endforeach

                        <strong class="category h2 fw-bold mb-2">A</strong>
                        <div class="d-flex flex-column">
                            <a href="{{route('contato_detail',1)}}">
                                <div class="contato mx-2 my-3 d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('img/user.svg')}}" alt="">
                                        <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                    </div>
                                    <div class="d-flex ">
                                        <a href="https://api.whatsapp.com/send?phone=5598988577445&text="
                                           class="mx-1"><img
                                                src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                            href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                                src="{{asset('img/tel.svg')}}" alt=""></a>
                                    </div>
                                </div>
                            </a>


                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>

                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>

                        </div>


                        <strong class="category h2 fw-bold mb-2">B</strong>
                        <div class="d-flex flex-column">
                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>

                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>

                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>

                        </div>

                        <strong class="category h2 fw-bold mb-2">C</strong>
                        <div class="d-flex flex-column">
                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>

                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>

                            <div class="contato mx-2 my-3 d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="{{asset('img/user.svg')}}" alt="">
                                    <p class="m-0 p-0 name-contato">Lorem ipsum</p>
                                </div>
                                <div class="d-flex ">
                                    <a href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/whatsapp.svg')}}" alt=""></a> <a
                                        href="https://api.whatsapp.com/send?phone=5598988577445&text=" class="mx-1"><img
                                            src="{{asset('img/tel.svg')}}" alt=""></a>
                                </div>
                            </div>

                        </div>
                    </div>


            </div>
        </div>



@endsection
