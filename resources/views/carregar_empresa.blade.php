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
      width: 40.23em;
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
  .profile-image {
            max-width: 140px;
            max-height: 140px;
            object-fit: cover;
            border-radius: 30%;
        }

        .text {
            position: relative;
            padding: 20px;
            border-radius: 5px;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
  </style>

<a href="{{ route('home') }}">
    <svg xmlns="http://www.w3.org/2000/svg" style="color: #ffffff; margin-top: 1%; margin-right: 95%" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
    </svg>
  </a> <br>
  
  <div class="product-container">
    
    <div class="text">
    <img src="{{ url("storage/profile/" . $user->profile) }}" alt="Imagem do Usuario" class="profile-image"> <br>
      <h1 class="product-title">{{ $user->nome }}</h1>
      <p class="product-info"><strong>CNPJ:</strong> {{ $user->cnpj }}</p>
      <p class="product-info"><strong>Telefone:</strong> {{ $user->telefone }}</p>
      <p class="product-info"><strong>Site:</strong> {{ $user->site }}</p>

