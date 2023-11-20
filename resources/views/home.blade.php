<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cultmais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Open Sans');
        @import url('https://fonts.googleapis.com/css?family=Lexend');

        :root {
            --medium-brown: #8f6c56;
            --soft-brown: #A38672;
            --clay: #3c4a51;
            --white-clay: #e0e2eb;
        }

        body::-webkit-scrollbar {
            width: 2px;
        }

        body::-webkit-scrollbar-track,
        body::-webkit-scrollbar-thumb {
            background-color: black;
            border-radius: 5px;
        }

        .quadradofundo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(11, 29, 38, 0.6);
            background-size: cover;
            background-position: center;
            z-index: -1;
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/img/wallpaper.jpg');
            background-size: cover;
            background-position: center;
            z-index: -2;
        }

        .dropdown-center {
            position: absolute;
            right: 10vh;
        }

        .subtitleone {
            font-size: 17px;
            font-family: "Kantumruy Pro", Arial, Helvetica, sans-serif;
            color: var(--soft-brown);
        }

        .btn-saibamais {
            background-color: var(--medium-brown);
            width: 75px;
            height: 45px;
            font-size: 18px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-family: "Kantumruy Pro", Arial, Helvetica, sans-serif;
            font-size: 100%;
            color: #fff;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 9vh;
        }


        .btn-saibamais:hover {
            background-color: var(--soft-brown);
        }

        .container {
            text-align: left;
            margin-top: 30vh;
            padding: 0 20px;
            color: black;
        }

        .subtitleone p {
            font-size: 15px;
            font-family: "Kantumruy Pro", Arial, Helvetica, sans-serif;
            color: var(--soft-brown);
            margin: 0;
        }

        .titleone {
            font-size: 50px;
            font-family: 'Kantumruy Pro', Times, serif;
            color: white;
            margin: 0;
            margin-top: 27vh;
        }

        .container a {
            text-decoration: none;
        }

        .whytravel {
            margin-top: 50vh;
            display: flex;
            justify-content: center;
            text-align: right;
        }

        .whytraveltwo {
            margin-top: 20vh;
            display: flex;
            justify-content: center;
            text-align: right;
        }

        .whytravel p {
            text-align: right;
        }

        .contentone {
            flex: 1;
            padding: 0 50px;
            max-width: 45%;
        }

        .titletwo {
            font-size: 24px;
            margin-bottom: 10px;
            font-family: 'Kantumruy Pro', Times, serif;
            text-align: left;
        }

        .descriptionone {
            font-size: 17px;
            line-height: 1.5;
            font-family: "Kantumruy Pro", Arial, Helvetica, sans-serif;
            text-align: left;
            width: 100%;
        }

        .firstimage {
            max-width: 50%;
        }

        .aboutus {
            margin-top: 15vh;
            display: flex;
            justify-content: center;
        }

        .contenttwo {
            flex: 1;
            padding: 0 20px;
            max-width: 50%;
        }

        .titlethree {
            font-size: 24px;
            margin-bottom: 10px;
            font-family: 'Kantumruy Pro', Times, serif;
        }

        .descriptiontwo {
            font-size: 16px;
            line-height: 1.5;
            font-family: "Kantumruy Pro", Arial, Helvetica, sans-serif;
            text-align: left;
        }

        .secondimage {
            max-width: 50%;
        }

        footer {
            color: black;
            padding: 30px 0;
            text-align: center;
            font-size: 14px;
            position: relative;
            margin-top: 10vh;
        }

        .footer-content {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            margin-top: 3vh;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
            gap: 20px;
        }

        .footer-logo {
            margin-bottom: 20px;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            text-align: center;
            flex-grow: 1;
        }

        .footer-links a {
            color: #1F1F20;
            text-decoration: none;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--medium-brown);
        }

        .footer-rights {
            width: 100%;
            text-align: center;
            margin-top: 3vh;
        }

        .text-fade {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1) 70%);
            pointer-events: none;
        }

        .scroll-outer {
            width: 90%;
            overflow: hidden;
            margin: 5%;
            text-align: right;
            margin-top: 13vh;
        }

        .topofslider {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0px;
            width: 100%;
            margin: 0;
            margin-right: 100px;
        }

        .title-filter {
            font-family: "Lexend", Arial, Helvetica, sans-serif;
            font-size: 30px;
            color: #9C7A65;
        }

        .recommendation-text {
            font-size: 14px;
            color: #666;
        }


        .filter-buttons {
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }

        .button {
            background-color: #fff;
            width: 95px;
            height: 45px;
            font-size: 18px;
            border: 1px solid #c3c5cc;
            border-radius: 20px;
            cursor: pointer;
            font-family: "Lexend", Arial, Helvetica, sans-serif;
            font-size: 100%;
            color: #000;
            font-weight: 100;
            margin: 0 auto;
        }

        .button:hover {
            background-color: #3C4A51;
            color: #fff;
            font-weight: 100;
        }

        .navbar {
            margin-top: 20px;
        }

        .desfocado {
            backdrop-filter: blur(5px);
            filter: blur(5px);
            transition: backdrop-filter 0.3s ease-in-out, filter 0.3s ease-in-out;
            z-index: 4;
        }



        #button1,
        #button2,
        #button3,
        #button4,
        #button5 {
            background-color: #fff;
            width: 95px;
            height: 45px;
            font-size: 18px;
            border: 1px solid #c3c5cc;
            border-radius: 20px;
            cursor: pointer;
            font-family: "Lexend", Arial, Helvetica, sans-serif;
            font-size: 100%;
            color: #000;
            font-weight: 100;
            text-decoration: none;
        }

        #button1:hover,
        #button2:hover,
        #button3:hover,
        #button4:hover,
        #button5:hover {
            background-color: #0B1D26;
            color: #fff;
            font-weight: 100;
            text-decoration: none;
        }

        #button6 {
            background-color: #fff;
            width: 50px;
            height: 40px;
            font-size: 18px;
            border: 1px solid #c3c5cc;
            border-radius: 20px;
            cursor: pointer;
            font-family: "Lexend", Arial, Helvetica, sans-serif;
            font-size: 100%;
            color: #000;
            font-weight: 100;
            text-decoration: none;
        }

        #button6:hover {
            background-color: #0B1D26;
            color: #fff;
            font-weight: 100;
            text-decoration: none;
        }

        option {
            margin: 10px 0;
            left: 20px;
            text-align: center;
        }

        option:hover {

            background-color: #0B1D26;
            color: white;
        }


        .scroll-container-1 {
            width: 100%;
            overflow-x: scroll;
            white-space: nowrap;
            background-color: #ffffff;
            overflow: hidden;
            margin-top: 13px;
        }

        .scroll-container-2 {
            width: 100%;
            overflow-x: scroll;
            white-space: nowrap;
            background-color: #ffffff;
            overflow: hidden;
            margin-top: 13px;
        }

        .scroll-content {
            display: inline-block;
        }

        .item {
            display: inline-block;
            width: 20%;
            height: 370px;
            background-color: transparent;
            text-align: left;
            padding: 10px;
            font-size: 20px;
            position: relative;
            margin-left: 20px;
            background-image: url("");
            background-size: cover;
            background-position: center;
            border-radius: 15px;
            margin: 0 10px;
        }

        .item h4 {
            margin-top: 52vh;
        }


        #button-left,
        #button-right {
            background-color: var(--white-clay);
            color: var(--clay);
            width: 55px;
            height: 50px;
            font-size: 18px;
            border: none;
            border-radius: 23px;
            cursor: pointer;
            font-size: 100%;
            bottom: 9vh;
            font-weight: 600;
        }

        #button-left:hover,
        #button-right:hover {
            background-color: #0B1D26;
            color: #fff;
        }

        #button-left-left,
        #button-right-right {
            background-color: var(--white-clay);
            color: #0B1D26;
            width: 55px;
            height: 50px;
            font-size: 18px;
            border: none;
            border-radius: 23px;
            cursor: pointer;
            font-size: 100%;
            bottom: 9vh;
        }

        #button-left-left:hover,
        #button-right-right:hover {
            background-color: #0B1D26;
            color: #fff;
        }


        @media (max-width: 768px) {
            .header {
                display: none;
            }

            .container {
                text-align: center;
            }

            .container p,
            .container h1 {
                font-size: 30px;
            }
        }

        .slide-container {
            max-width: 1120px;
            width: 100%;
            padding: 40px 0;
            height: 640px;
            overflow: hidden;
        }

        .slide-content {
            margin: 0 40px;
            overflow: hidden;
            border-radius: 25px;
            height: 100%;
        }

        .card {
            border-radius: 25px;
            background-color: #FFF;
        }

        .image-content,
        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px 14px;
        }

        .image-content {
            position: relative;
            row-gap: 5px;
            padding: 25px 0;
        }

        .overlay {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: #fff;
            border-radius: 25px 25px 0 25px;
        }

        .overlay::before,
        .overlay::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -40px;
            height: 40px;
            width: 40px;
            background-color: #fff;
        }

        .overlay::after {
            border-radius: 0 25px 0 0;
            background-color: #FFF;
        }

        .card-image {
            position: relative;
            height: 300px;
            width: 290px;
            border-radius: 10%;
            background: #fff;
            padding: 1px;
        }

        .card-image .card-img {
            height: 100%;
            width: 100%;
            border-radius: 10%;
        }

        .name {
            font-size: 18px;
            font-weight: 500;
            color: #333;
        }

        .description {
            font-size: 14px;
            color: #707070;
            text-align: center;
        }

        .button {
            border: 1px solid #0B1D26;
            font-size: 16px;
            color: #000;
            padding: 8px 16px;
            background-color: #fff;
            border-radius: 6px;
            margin: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #0B1D26;
            color: #fff;
            font-weight: 100;
        }

        .swiper-navBtn {
            color: #0B1D26;
            transition: color 0.3s ease;
        }

        .swiper-navBtn:hover {
            color: #0B1D26;
        }

        .swiper-navBtn::before,
        .swiper-navBtn::after {
            font-size: 35px;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-button-prev {
            left: 0;
        }

        .swiper-pagination-bullet {
            background-color: #0B1D26;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background-color: #0B1D26;
        }

        @media screen and (max-width: 768px) {
            .slide-content {
                margin: 0 10px;
            }

            .swiper-navBtn {
                display: none;
            }
        }

        .container {
            margin-top: 60px;
        }

        .container>header {
            padding: 1em;
            text-align: center;
        }

        .container>header h1 {
            font-family: "Lexend", Arial, Helvetica, sans-serif;
            font-size: 30px;
            color: #0B1D26;
        }

        .wrapper {
            line-height: 1.5em;
            margin: 0 auto;
            padding: 2em 0 3em;
            width: 90%;
            max-width: 2000px;
            overflow: hidden;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background: #fff;
        }

        th {
            background-color: #0B1D26;
            font-weight: bold;
            color: #fff;
            white-space: nowrap;
        }

        td,
        th {
            padding: 1em 1.5em;
            text-align: left;
        }

        tbody th {
            background-color: #2ea879;
        }

        tbody tr:nth-child(2n-1) {
            background-color: #f5f5f5;
            transition: all .125s ease-in-out;
        }

        tbody tr:hover {
            background-color: var(--white-clay);
        }

        td.rank {
            text-transform: capitalize;
        }

        .figure {
            width: 720px;
            height: 550px;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 560px;
            height: 640px;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 5;
        }

        .popup-content {
            position: relative;
            background-color: #0B1D26;
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .popup-content .close-button {
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }


        .profile-image {
            max-width: 120px;
            max-height: 120px;
            object-fit: cover;
            border-radius: 30%;
        }

    </style>

</head>

@if (Auth::check() && Auth::user()->situation == 3)
{{ Auth::logout() }}
@endif

<body>

    <div class="quadradofundo" id="conteudo"></div>

    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-light bg-light navbar-transparent bg-transparent">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('Img/logo_atualizada.png') }}" alt="Cultmais" class="img-fluid" style="width: 60%">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">


                <div class="dropdown-center ml-auto" style="right:6vh">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">

                        @if(Auth::check())
                        Olá, {{ Auth::user()->nome }}
                        @endif

                        @guest
                        Iniciar sessão
                        @endguest

                    </button>
                    <ul class="dropdown-menu">
                        @guest
                        <li><a class="dropdown-item" href="{{ route('login.form') }}">Login</li>
                        <li><a class="dropdown-item" href="{{ route('user.create') }}">Cadastre-se</a></li>
                        @endguest
                        @if(auth()->check() && auth()->user()->situation == 2)
                        <li><a class="dropdown-item" href="{{ route('listar.usuarios') }}">Aprovar usuário</a></li>
                        <li><a class="dropdown-item" href="{{ route('excluir.usuarios') }}">Desativar usuários</a></li>
                        @endif
                        @if(auth()->check())
                        <li><a class="dropdown-item" href="{{ route('local.create') }}">Cadastre um local</a></li>
                        <li><a class="dropdown-item" href="#" id="openPopup">@if(Auth::check())
                                <p>Perfil</p>
                                @endif
                            </a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @endif
                    </ul>
                </div>


            </div>
        </nav>
    </div>

    <div class="container">

        <div class="background"></div>

        <div class="popup" id="myPopup">
            
            <div class="popup-content">
                @if(Auth::check())
                <button class="btn-close" id="closePopup" style="margin-top: 1%; margin-left: 90%; background-color: #fff"></button> <br> <br>
                <img src="{{ url("storage/profile/" . Auth::user()->profile) }}" alt="Foto de perfil" class="profile-image" style="margin-top: -4vh;"> <br>
                <p class="descriptionusers"><strong> Nome: </strong> {{ Auth::user()->nome }}</p>
                <p class="descriptionusers"><strong>CNPJ: </strong> {{ Auth::user()->cnpj }}</p>
                <p class="descriptionusers"><strong>Telefone: </strong> {{ Auth::user()->telefone }}</p>
                <p class="descriptionusers"><strong>Email: </strong> {{ Auth::user()->email }}</p>
                <p class="descriptionusers"><strong>Site: </strong> {{ Auth::user()->site }}</p>

                <div class="btn-toolbar" role="toolbar">
            </div>

                <button class="btn bg-dark text-white m-4" style="width:20vh; margin-top: -16vh;" id="alterar-button">Alterar</button>

                <form action="{{ route('excluir.usuario',  Auth::user()->id) }}" method="post" type="hidden">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="width:20vh;" class="btn bg-danger text-white m-4">Desativar</button>
                </form>
                @endif
            </div>

        </div>


        <h1 class="titleone" style="text-align: center"> Viajar é investimento<br>em cultura, saúde e felicidade! </h1>
        <br>
        <p class="subtitleone" style="text-align: center"> Cultura e Turismo </p>


        <button href="" class="btn-saibamais" onclick="rolarAteRodape()">🡣</button>

        <div class="text-fade"></div>


    </div>


    <div class="whytravel">

        <figure class="figure">
            <img src="/img/pexels-lucia-barreiros-silva-7903925.jpg" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption">O Teatro Amazonas - AM, Brasil.</figcaption>
        </figure>

        <div class="contentone">

            <br> <br> <br> <br> <br>

            <h1 class="titletwo" style="text-align:right">Por que Visitar um Ponto Cultural?</h1>

            <p class="descriptionone">

                O Brasil oferece praias incríveis, cidades animadas e uma cultura rica. Suas praias variam de Copacabana
                a Fernando de Noronha,
                enquanto as cidades, como o Rio de Janeiro e Salvador, são conhecidas por festas e diversão.
                Além disso, o Brasil possui um valioso patrimônio cultural, com museus e teatros, como o Museu Nacional
                e o Teatro Amazonas, que contam a história do país e sua contribuição global. Uma viagem ao Brasil é uma
                experiência que une natureza e cultura em uma jornada inesquecível.

            </p>

        </div>

    </div>

    <div class="whytraveltwo">

        <div class="contentone" id="ola">

            <br> <br> <br>

            <h1 class="titletwo">Sobre nós</h1>

            <p class="descriptionone">

                Nosso objetivo é proporcionar uma experiência turística única, revelando lugares fascinantes muitas
                vezes ignorados pelos itinerários convencionais.
                Compartilhamos destinos que destacam aspectos cruciais da história e cultura do Brasil, criando
                viagens memoráveis.
                Nossos parceiros revelam locais incomuns e menos explorados, cada um com sua própria história
                singular.
                Oferecemos informações sobre destinos envolventes, que ao mesmo tempo entretêm e educam.
                Nosso desejo é estimular a exploração de novos horizontes, a descoberta das riquezas do Brasil e
                uma conexão profunda com sua história e cultura.

            </p>

        </div>

        <figure class="figure">
            <img src="/img/pexels-feyza-daştan-17279643.jpg" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption"></figcaption>
        </figure>

    </div>



    <div class="scroll-outer">

        <div class="topofslider">
            <h1 class="title-filter">
                <span class="recommendation-text">Recomendações de</span> <br>
                Pontos Culturais
            </h1>

            <div class="filter-buttons mx-auto">
                <a href="{{ route('filterByCategory', ['categoryId' => 1]) }}" id="button1" class="button">Turismo</a>
                <a href="{{ route('filterByCategory', ['categoryId' => 2]) }}" id="button3" class="button">Parque</a>
                <a href="{{ route('filterByCategory', ['categoryId' => 3]) }}" id="button4" class="button">Teatro</a>
                <a href="{{ route('filterByCategory', ['categoryId' => 4]) }}" id="button5" class="button">Museu</a>
                <a href="{{ route('recentes') }}" id="button6" class="button">Recentes</a>
                <a href="{{ route('home') }}" id="button2" class="button">Todos</a>
                <div class="btn-group dropdown-center" style="margin-left: 11vh; margin-top: -3px; position: relative">
                <select id="regioes" class="form-select" style="width: 155px; height: 40px; font-size: 18px; border: 1px solid #c3c5cc; border-radius: 20px;" onchange="redirectToRegion()">
                    <option value="0">Mais Filtros</option>
                    <option value="1">Norte</option>
                    <option value="2">Nordeste</option>
                    <option value="3">Centro-Oeste</option>
                    <option value="4">Sudeste</option>
                    <option value="5">Sul</option>
                </select>
                </div>
            </div>
        </div>

        <div class="slide-container swiper" id="locais-container">
            <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                @include('_locais')
            </div>

        </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination" id="ranking"></div>

        </div>

        <div class="container">
            <header>
                <h1>Ranking de Empresas por Curtidas</h1>
            </header>
            <div class="wrapper">
                <table>
                    <thead>
                        <tr style="background-color:#0B1D26">
                            <th style="background-color:#0B1D26">Rank</th>
                            <th style="background-color:#0B1D26">Nome</th>
                            <th style="background-color:#0B1D26">Curtidas</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @php
                            $rank = 1;
                        @endphp
                        @foreach ($curtidasUsuarios as $usuario)
                            @if ($usuario->situation == 3 || $usuario->situation == 2 || $usuario->situation == 0   )
                                @continue
                            @endif
                            <tr>
                                <td>{{ $rank }}</td>
                                <td><a href="{{ route('user.show', ['id' => $usuario->id]) }}">{{ $usuario->nome }}</a></td>
                                <td>{{ $usuario->total_curtidas }}</td>
                            </tr>
                            @php
                                $rank++;
                                if ($rank > 10) break;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
</body>

<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/script.js"></script>

</div>

<footer id="footer" style="background-color:#0B1D26">

    <div class="footer-content" id="foot">

        <img src="{{ asset('Img/logo_atualizada.png') }}" alt="Cultmais" class="img-fluid" style="width: 10%; margin:5%">

        <div class="footer-links">

            <a href="#" style="color:#fff; text-align:left">Termos e Condições</a>
            <a href="#" style="color:#fff; text-align:left">Política de Privacidade</a>
            <a href="#" style="color:#fff; text-align:left">Perguntas Frequentes</a>
            <a href="#" style="color:#fff; text-align:left">Sobre Nós</a>

        </div>

        <div class="footer-links">

            <a href="#" style="color:#fff; text-align:left">Cadastre sua Empresa</a>
            <a href="#" style="color:#fff; text-align:left">Cadastre um Ponto Cultural</a>
            <a href="#" style="color:#fff; text-align:left">Empresas Parceiras</a>
            <a href="#" style="color:#fff; text-align:left">Avaliações</a>

        </div>

        <div class="footer-links">

            <a href="#" style="color:#fff; text-align:left">cultmaistcc2023@gmail.com</a>
            <a href="#" style="color:#fff; text-align:left">comercial@cultmais.com.br</a>

        </div>

        <div class="footer-rights" style="color:#fff">

            <p> 2023 | Cultmais </p>

        </div>
    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>




    function rolarAteRodape() {

        const rodape = document.getElementById('foot');
        rodape.scrollIntoView({
            behavior: 'smooth'
        });

    }

    $(document).ready(function() {
        const scrollContainer1 = $(".scroll-container-1");
        const buttonLeft1 = $("#button-left");
        const buttonRight1 = $("#button-right");
        const scrollStep = 200;

        buttonLeft1.click(function() {
            scrollContainer1.animate({
                scrollLeft: "-=" + scrollStep
            }, 400);
        });

        buttonRight1.click(function() {
            scrollContainer1.animate({
                scrollLeft: "+=" + scrollStep
            }, 400);
        });
    });


    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });


    document.getElementById("openPopup").addEventListener("click", function() {
        document.getElementById("myPopup").style.display = "block";
        document.body.style.overflow = "hidden";
        document.getElementById("conteudo").classList.add("desfocado"); // Aplica o desfoque
    });

    document.getElementById("closePopup").addEventListener("click", function() {
        document.getElementById("myPopup").style.display = "none";
        document.body.style.overflow = "auto";
        document.getElementById("conteudo").classList.remove("desfocado"); // Remove o desfoque
    });

    document.getElementById('alterar-button').addEventListener('click', function() {
        window.location.href = "{{ route('user.create') }}";
    });

    document.getElementById('alterar-local-button').addEventListener('click', function() {
    const localId = this.getAttribute('data-local-id');
    window.location.href = `/locais/${localId}/alterar`;
});

    function redirectToRegion() {
    const select = document.getElementById("regioes");
    const selectedRegion = select.options[select.selectedIndex].value;

    if (selectedRegion !== "0") {
        const regionURL = `/filter-by-region/${selectedRegion}`;
        window.location.href = regionURL; 
    }
}


</script>

</body>

</html>