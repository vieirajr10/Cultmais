<link href="{{ asset('Style/login.css') }}" rel="stylesheet">

@extends('estrutura.layout_cadastro_empresa')
@section('title', 'Cultmais | Cadastro de Empresa')

@section('conteudo')
        
    <div class="box ">

      <a href="{{ route('home') }}">
        <img src="{{ asset('Img/logo_atualizada.png') }}" alt="Cultmais" class="img-fluid" style="width: 21%; margin-top:30px; margin-left:8%">
    </a>

        <form action="{{ route('user.store') }}" onsubmit="return validarFormulario()" method="POST" style='width: 110vh; padding: 90px; border-radius:3%; color:aliceblue' enctype="multipart/form-data">

          @csrf
          @guest
            <h1 style='color:rgb(216, 215, 214); font-size: 27px;'>Cadastro de Empresa</h1> <br>
          @endguest  

          @if(auth()->check())
          <h1 style='color:rgb(216, 215, 214); font-size: 27px;'>Alterar Empresa</h1> <br>
          @endif
          @if(auth()->check())
          <input type="hidden" class="form-control"   name="id" value="{{ Auth::user()->id }}">
          <input type="hidden" class="form-control"  name="situation" value="{{ Auth::user()->situation }}">
          @endif
          @if(auth()->check())
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNome4">Nome</label>
                  <input type="Nome" class="form-control" id="inputNome4" placeholder="Nome" name="nome" value="{{ Auth::user()->nome }}">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCnpj4">CNPJ</label>
                  <input type="Cnpj" class="form-control" id="inputCnpj4" placeholder="CNPJ" name="cnpj" value="{{ Auth::user()->cnpj }}">
                </div>
              </div> <br>

              <div class="form-group">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Perfil</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="profile">
                    <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label>
                </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail">E-mail</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="E-mail" name="email" value="{{ Auth::user()->email }}">
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputPassword">Senha</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua Senha" name="senha">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword2">Confirme sua Senha</label>
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Digite sua senha novamente">
                </div>
              </div>
        
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputTelefone">Telefone</label>
                  <input type="text" class="form-control" id="inputTelefone" placeholder="Número para Contato" name="telefone" value="{{ Auth::user()->telefone }}">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSite">Site</label>
                  <input type="text" class="form-control" id="inputSite" placeholder="Url do Site da Empresa" name="site" value="{{ Auth::user()->site }}">
                </div> <br>
                  @endif
                  @guest
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNome4">Nome</label>
                  <input type="Nome" class="form-control" id="inputNome4" placeholder="Nome" name="nome">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCnpj4">CNPJ</label>
                  <input type="Cnpj" class="form-control" id="inputCnpj4" maxlength="18" placeholder="99.999.999/9999-99" name="cnpj">
                </div>
              </div> <br>

              <div class="form-group">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Perfil</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="profile">
                    <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label>
                </div>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail">E-mail</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="E-mail" name="email">
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputPassword">Senha</label>
                  <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua Senha" name="senha">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword2">Confirme sua Senha</label>
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Digite sua senha novamente">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputTelefone">Telefone</label>
                  <input type="text" class="form-control" id="inputTelefone" maxlength="15" placeholder="(99) 9999-99999" name="telefone">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSite">Site</label>
                  <input type="text" class="form-control" id="inputSite" placeholder="Url do Site da Empresa" name="site">
                </div> <br>
                @endguest

                @guest
                <p>Já é cadastrado? <a class="link-opacity-80" href="{{ route('login.form') }}">Faça login</a></p>
                @endguest
              </div> 

              @if(auth()->check())
              <button type="submit" class="btn btn-outline-dark">Alterar</button>
              @endif

              @guest
              <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
              @endguest

        </form>

    </div>

    <script>

      const input = document.querySelector('#inputCnpj4')

      input.addEventListener('keypress', ()=>{
        let inputlength = input.value.length

        if(inputlength === 2 || inputlength === 6){
          input.value+='.'
        }else if(inputlength === 10){
          input.value+='/'
        }else if(inputlength === 15){
          input.value+='-'
        }

      })

      const input2 = document.querySelector('#inputTelefone')

      input2.addEventListener('keypress', ()=>{
        let inputlength = input2.value.length

        if(inputlength === 0){
          input2.value+='('
        }else if(inputlength === 3){
          input2.value+=') '
        }else if(inputlength === 10){
          input2.value+='-'
        }
      })

      function validarFormulario() {
      var nome = document.getElementById('inputNome4').value;
      var cnpj = document.getElementById('inputCnpj4').value;
      var profile = document.getElementById('inputGroupFile01').value;
      var email = document.getElementById('inputEmail').value;
      var senha = document.getElementById('inputPassword').value;
      var senhaConfirmacao = document.getElementById('inputPassword2').value;
      var telefone = document.getElementById('inputTelefone').value;
      var site = document.getElementById('inputSite').value;

      if (
          nome === "" ||
          cnpj === "" ||
          email === "" ||
          telefone === "" ||
          site === ""
      ) {
          alert("Por favor, preencha todos os campos obrigatórios.");
          return false;
      }
      if(senha === "" ||
        senhaConfirmacao === ""){
          alert("Por favor, insira sua senha.");
          return false;
          }

      if (senha !== senhaConfirmacao) {
          alert("As senhas digitadas não coincidem. Por favor, verifique.");
          return false;
      }

      return true;
  }

    </script>

@endsection



