@extends('layouts.app')

@section('content')
    <div class="container mt-4" style="width: 1300px;">
        <div class="d-flex" style="height: 860px">
            <div class="contact-mensage">
                <h4>Ultimas mensagens</h4>

                <div class="card-user-message active-message">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <p>Name user</p>
                            <span>Email normal sobre jogos</span>
                        </div>
                    </div>
                </div>
                <div class="card-user-message">
                    <div class="d-flex align-items-center">
                        <div class="d-flex flex-column">
                            <p>Name user</p>
                            <span>Email normal sobre jogos</span>
                        </div>
                    </div>
                </div>


            </div>
            <div class="message">
                <div class="header-message">
                    <h4>email do usuario</h4>
                </div>
                <div class="body-message">
                    <div class="content-email p-4 d-flex justify-content-between flex-column" style="height: 787px">
                        <div class="card-menssage bg-white"
                             style="padding:10px;border-radius:6px;min-height:375px;">
                            <p>Oi eric_lewis,
                                Você está recebendo este e-mail porque solicitou uma redefinição de senha da sua conta
                                EA. Se você não solicitou essa mudança, ignore este e-mail.

                                Você pode mudar sua senha novamente a qualquer momento dentro do seu porta Minha Conta
                                no site www.ea.com/.
                                Bons jogos, Equipe EA</p>
                        </div>
                        <div class="detail">
                            <p class="m-0 p-0">Para: eric_lewis02@gmail.com</p>
                            <p class="m-0 p-0">De: EA@e.ea.com</p>
                            <p class="m-0 p-0">Assunto: Redefina Sua Senha</p>
                            <p class="m-0 p-0">Data: 20 de Abr de 2021 14:24</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection

