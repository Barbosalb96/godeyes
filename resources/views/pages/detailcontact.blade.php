@extends('layouts.app')

@section('content')
    <div class="container mt-4 d-flex  justify-content-center">
        <div style="width: 881px;">
            <h2 class="text-center fw-bold my-3">Fotos</h2>
            <div>

                <div class="d-flex align-items-center justify-content-center flex-column">
                    <img src="{{asset('img/user.svg')}}" alt="" width="99px" height="99px">
                    <h1 class="title-contato">{{$contacts->name}}</h1>


                    <div class="d-flex">
                        <p>Email: </p>
                        <p>{{$contacts->email}}</p>
                    </div>
                        <div class="d-flex justify-content-between" style="width: 437px;margin-top: 10px;">
                            <p>Numero: {{$contacts->numero}}</p>
                            <div class="d-flex justify-content-between">

                                @if($contacts->whatsapp == 1)
                                    <a href="https://api.whatsapp.com/send?phone={{$contacts->numero}}&amp;text="
                                       class="mx-1"><img
                                            src="http://127.0.0.1:8000/img/whatsapp.svg" alt=""></a>
                                @endif
                                <a href="https://api.whatsapp.com/send?phone={{$contacts->numero}}&amp;text="
                                   class="mx-1"><img
                                        src="http://127.0.0.1:8000/img/tel.svg" alt=""></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


@endsection
