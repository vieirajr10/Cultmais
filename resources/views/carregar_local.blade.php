<style>
   
    body {
      background-color: #0B1D26;
      font-family: "Arial", sans-serif;
      text-align: center;
      padding: 20px;
    }
  
    a {
      text-decoration: none;
      color: #3498db;
    }

    .product-container {
      background: #0f1e25c9;
      border-radius: 8px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
      border: .1em solid rgba(0, 0, 0, 0.2);
      margin-bottom: 1em;
      margin: 1em auto;
      width: 69.23em;
      height: 38rem;
      text-align: left;
      padding: 20px;
      display: flex;
      align-items: center;
      border: 2px solid #fff;
    }
  
    .product-image {
      max-width: 60%;
      height: 100%;
      border: 2px solid #a0a0a0;
      border-radius: 8px;
      margin-right: 30px;
    }

    .text {
      margin-left: 2%; 
    }
  
    .product-title {
      color: #ffffff;
      font-size: 28px;
      margin-top: 0;
      font-family: "Lato", sans-serif;
    }
  
    .product-description {
      font-size: 18px;
      color: #bebfc0;
    }

    .product-info {
      font-size: 16px;
      font-family: "Quicksand", sans-serif;
      color: #bebfc0; 
    }
  
  .buy-link {
    display: inline-block;
    font-size: 18px;
    text-decoration: none;
    margin-top: 20px;
    padding: 10px 20px;
    border-radius: 4px;
  }

  .buy-link:hover {
    color: #fff;
    text-decoration: none;
  }
  
  .btn {
    display: inline-block;
    font-size: 18px;
    text-decoration: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 4px;
    margin: 4px;
  }

  .btn.bg-dark {
    background-color: #343a40;
  }

  .btn.bg-danger {
    background-color: #dc3545;
  } 

  .btn.bg-dark:hover {
    background-color: #2d2e2e;
  }

  .btn.bg-danger:hover {
    background-color: #9c1a27;
  }
  </style>

<a href="{{ route('home') }}">
    <svg xmlns="http://www.w3.org/2000/svg" style="color: #ffffff; margin-top: 1%; margin-right: 95%" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
  </a> <br>
  
  <div class="product-container">
    
    <img src="{{ url("storage/imagens/{$local->imagem}") }}" alt="Imagem do Produto" class="product-image"> <br>
  
    <div class="text">

      <h1 class="product-title">{{ $local->nome }}</h1>
      <p class="product-description">{{ $local->descricao }}</p>
      <p class="product-info"><strong>Rua:</strong> {{ $local->rua }}</p>
      <p class="product-info"><strong>Bairro:</strong> {{ $local->bairro }}</p>
      <p class="product-info"><strong>CEP:</strong> {{ $local->cep }}</p>
      <p class="product-info"><strong>Cidade:</strong> {{ $local->cidade }}</p>
      @if($local->latitude)
          <p class="product-info"><strong>Latitude:</strong> {{ $local->latitude }}</p>
      @endif

      @if($local->longitude)
          <p class="product-info"><strong>Longitude:</strong> {{ $local->longitude }}</p>
      @endif

      <p class="product-info"><strong>Curtido por:</strong>
        @foreach($curtidas->take(6) as $index => $curtida)
            @if($curtida->usuario)
                {{ $curtida->usuario->nome }}
                @if($index < 5 && $index < count($curtidas) - 1)
                    ,
                @elseif($index == 5 && count($curtidas) > 6)
                    ...
                @endif
            @else
                Usuário desconhecido
            @endif
        @endforeach
    </p>
    
      <p class="product-description"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg> {{ $curtidas->count() }} </p>
    
      @if($local->latitude || $local->longitude)
      <a href="https://www.google.com/maps?q={{ $local->latitude }},{{ $local->longitude }}" target="_blank">Ver no Google Maps</a> <br> <br>
      @endif
      @if(auth()->check() && auth()->user()->situation == 2)
      <a href="{{ route('alterar.create', ['localId' => $local->id]) }}" class="buy-link btn bg-dark text-white m-4" id="idLocal">Alterar</a>
      <a href="{{ route('local.excluir', ['localId' => $local->id]) }}" class="buy-link btn bg-danger text-white m-4" id="excluirLocal">Excluir</a>
      @endif

    </div>

  </div>
  <p class="product-description" style="margin-right:65%;">Local inserido por: {{ $user->nome }}</p>

  <script>
     function openLocal(element) {
        var localDetails = element.getAttribute("data-local-details");
        var local = JSON.parse(localDetails);

        var idElement = popup.querySelector("#id");
        var idLocal = popup.querySelector("#idLocal");
        var excluirLocal = popup.querySelector("#excluirLocal");

        idLocal.href = "/locais/" + local.id + "/alterar";
        excluirLocal.href = "/local/excluir/" + local.id;

    }

  </script>
  