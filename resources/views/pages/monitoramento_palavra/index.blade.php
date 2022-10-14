@extends('layouts.app')

@section('content')
    <div class="container mt-4" style="width: 1090px;">
        <div class="card" style="background: #FFFFFF;
            border-radius: 20px;height: 854px">
            <div class="header-monitoramento text-center my-3">
                <h1>Monitoramento de Palavras - Chave</h1>
            </div>

            <div class="d-flex mt-3 align-items-center mx-4 justify-content-between">
                <div class="d-flex flex-column">
                    <label for="exampleInputEmail1">Adicionar Regra:</label>
                    <input type="email" class="form-custom-monitramento" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="d-flex flex-column">
                    <label for="exampleInputEmail1">Escolher a funcionalidade:</label>

                    <select name="" id=""class="form-custom-monitramento">
                        <option value="">Aplicativos</option>
                        <option value="">Aplicativos</option>
                        <option value="">Aplicativos</option>
                        <option value="">Aplicativos</option>
                        <option value="">Aplicativos</option>
                        <option value="">Aplicativos</option>
                        <option value="">Aplicativos</option>
                    </select>
               </div>
            </div>

            <div class="content-search">

            </div>

        </div>

    </div>



@endsection

