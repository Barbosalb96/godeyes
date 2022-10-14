<sidebar class="sidebar-custom">
    <div class="logo d-flex align-items-center flex-column my-3">
        <img src="{{asset('img/logo.svg')}}" alt="">
        <span class="text-primary fw-bold">Eyes-God</span>
    </div>

    <div class="options  d-flex align-items-center flex-column">
        <ul>
            <li class="home"><a href="{{route('home')}}"> <img src="{{asset('img/home.svg')}}" class="icon-navigate"
                                                               alt=""></a></li>
            <li class="tools"><a href="" id="geral"> <img src="{{asset('img/agenda.svg')}}" class="icon-navigate"
                                                          alt=""></a></li>
            <li class=""><a href="" id="localizacao"> <img src="{{asset('img/localizacao.svg')}}" class="icon-navigate"
                                                           alt=""></a></li>
            <li class=""><a href=""> <img src="{{asset('img/social.svg')}}" class="icon-navigate" alt=""></a></li>
            <li class=""><a href="{{route('screenrecorder')}}"> <img src="{{asset('img/screen.svg')}}"
                                                                     class="icon-navigate" alt=""></a></li>
            <li class=""><a href="" id="historico"><img src="{{asset('img/historico.svg')}}" class="icon-navigate"
                                                        alt=""></a></li>
            <li class=""><a href="" id="block"> <img src="{{asset('img/redes.svg')}}" class="icon-navigate" alt=""></a>
            <li class="">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</sidebar>

@push('script')

    <script>
        $('#geral').on('click', function (e) {
            e.preventDefault();
            if ($('.content-sidebar-contato').hasClass('none-geral')) {
                $('.content-sidebar-contato').removeClass('none-geral');
                $('.content-sidebar-location').addClass('none-geral');
                $('.content-sidebar-historico').addClass('none-geral');
                $('.content-sidebar-block').addClass('none-geral');
            } else {
                $('.content-sidebar-contato').addClass('none-geral');
            }
        })
    </script>

    <script>
        $('#localizacao').on('click', function (e) {
            e.preventDefault();
            if ($('.content-sidebar-location').hasClass('none-geral')) {
                $('.content-sidebar-location').removeClass('none-geral');
                $('.content-sidebar-contato').addClass('none-geral');
                $('.content-sidebar-historico').addClass('none-geral');
                $('.content-sidebar-block').addClass('none-geral');

            } else {
                $('.content-sidebar-location').addClass('none-geral');
            }
        })
    </script>

    <script>
        $('#historico').on('click', function (e) {
            e.preventDefault();
            if ($('.content-sidebar-historico').hasClass('none-geral')) {
                $('.content-sidebar-historico').removeClass('none-geral');
                $('.content-sidebar-location').addClass('none-geral');
                $('.content-sidebar-contato').addClass('none-geral');
                $('.content-sidebar-block').addClass('none-geral');
            } else {
                $('.content-sidebar-historico').addClass('none-geral');
            }
        })
    </script>

    <script>
        $('#block').on('click', function (e) {
            e.preventDefault();
            if ($('.content-sidebar-block').hasClass('none-geral')) {
                $('.content-sidebar-block').removeClass('none-geral');
                $('.content-sidebar-historico').addClass('none-geral');
                $('.content-sidebar-location').addClass('none-geral');
                $('.content-sidebar-contato').addClass('none-geral');
            } else {
                $('.content-sidebar-block').addClass('none-geral');
            }
        })
    </script>

@endpush
