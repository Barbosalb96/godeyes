@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="card p-3 d-flex flex-column align-items-center">
            <h2 class="text-center fw-bold my-3">Screenrecorder </h2>
            <div class="container">

                <div class="d-flex flex-wrap">
                    <div class="card-assets">
                        <img src="{{asset('photos/img.jpg')}}" alt="">
                    </div>
                    <div class="card-assets">
                        <img src="{{asset('photos/img.jpg')}}" alt="">
                    </div>
                    <div class="card-assets">
                        <img src="{{asset('photos/img.jpg')}}" alt="">
                    </div>
                    <div class="card-assets">
                        <img src="{{asset('photos/img.jpg')}}" alt="">
                    </div>
                    <div class="card-assets">
                        <img src="{{asset('photos/img.jpg')}}" alt="">
                    </div>
                    <div class="card-assets">
                        <img src="{{asset('photos/img.jpg')}}" alt="">
                    </div>

                </div>


            </div>
        </div>



@endsection
