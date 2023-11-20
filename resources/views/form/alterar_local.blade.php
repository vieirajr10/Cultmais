<link href="{{ asset('Style/login.css') }}" rel="stylesheet">

@extends('estrutura.layout_cadastro_local')
@section('title', 'Cultmais | Cadastro de Local')

@section('conteudo')
        
    <div class="box ">

        <a href="{{ route('home') }}">
            <img src="{{ asset('Img/logo_atualizada.png') }}" alt="Cultmais" class="img-fluid" style="width: 21%; margin-top:30px; margin-left:3%">
        </a>

        <form id="form" action="{{ route('alterar.store', ['localId' => $local->id]) }}" onsubmit="return validarFormulario()" method="POST" style='width: 110vh; padding: 90px; border-radius:3%; color:aliceblue' enctype="multipart/form-data">
            @csrf
            @method('POST')

            <h1 style='color:rgb(216, 215, 214); font-size: 27px;'>Cadastro de Local</h1> <br>
            <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="inputNome4">Nome</label>
                  <input type="text" class="form-control require" id="inputNome4" name="nome" placeholder="Nome" oninput="nameValidate()" value="{{ $local->nome }}">
                  <span class="span-required">O nome deve ter no mínimo 3 caracteres</span>
              </div>

              <div class="form-group col-md-6">
                  <label for="inputDescricao4">Descriçao</label>
                  <input type="text" class="form-control require" id="inputDescricao4" name="descricao" placeholder="Descrição simples do local" value="{{ $local->descricao }}">
                  <span class="span-required">A descrição deve ter no mínimo 3 palavras</span>
              </div>
          </div> <br>
      
          <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="imagem">
                <label class="custom-file-label" for="inputGroupFile01">Escolher arquivo</label>
            </div>
            </div>
      
          <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="inputRua">Rua</label>
                  <input type="text" class="form-control require" id="inputRua" name="rua" placeholder="ex: Rua José Miguel Navarro" value="{{ $local->rua }}">
              </div>
              <div class="form-group col-md-6">
                  <label for="inputBairro">Bairro</label>
                  <input type="text" class="form-control require" id="inputBairro" name="bairro" placeholder="ex: Parque das Amoras I" value="{{ $local->bairro }}">
              </div>
          </div>
      
          <div class="form-row">
              <div class="form-group col-md-4">
                  <label for="inputCep">CEP</label>
                  <input type="text" class="form-control require" id="inputCep" name="cep" placeholder="00000-000" value="{{ $local->cep }}">
                  <span class="span-required">O CEP deve ter 8 números</span>
              </div>
              <div class="form-group col-md-3">
                  <label for="inputRegiao">Região</label>
                  <select name="regiao_id" id="regiao" class="form-control">
                  <option value="">Selecione uma região</option>
                  @foreach ($regioes as $regiao)
                    <option value="{{ $regiao->id }}" @if ($regiao->id == $local->regiao_id) selected @endif>
                        {{ $regiao->nome }}
                    </option>
                  @endforeach
                  </select>

              </div>
              <div class="form-group col-md-4">
                  <label for="inputCidade">Cidade</label>
                  <input type="text" class="form-control require" id="inputCidade" name="cidade" placeholder="ex: Campinas" value="{{ $local->cidade }}">
              </div>
              <div class="form-group col-md-1">
                  <label for="inputEstado">Estado</label>
                  <input type="text" class="form-control require" id="inputEstado" name="estado" placeholder="UF" value="{{ $local->estado }}">
              </div>
          </div>
      
          <div class="form-group">

            <label for="categoria">Categoria:</label>
            <select name="categoria_id" id="categoria" class="form-control">
            <option value="">Selecione uma categoria</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" @if ($categoria->id == $local->categoria_id) selected @endif>
                    {{ $categoria->nome }}
                </option>
            @endforeach
            </select>

            
        </div> 

        <div class="form-group">
            <input type="hidden" name="latitude" id="latitude" value="{{ $local->latitude }}">
            <input type="hidden" name="longitude" id="longitude" value="{{ $local->longitude }}">
        </div> <br>

              <button type="submit" class="btn btn-outline-dark">Alterar</button>



        </form>

    </div>


    <script>

        function validarFormulario() {
            
            var nome = document.getElementById('inputNome4').value;
            var descricao = document.getElementById('inputDescricao4').value;
            var cep = document.getElementById('inputCep').value;
            var rua = document.getElementById('inputRua').value;
            var bairro = document.getElementById('inputBairro').value;
            var regiao = document.getElementById('regiao').value;
            var cidade = document.getElementById('inputCidade').value;
            var estado = document.getElementById('inputEstado').value;
            var categoria = document.getElementById('categoria').value;

            if (nome === "" || nome.length < 3) {

                alert("Por favor, verifique se o campo nome foi digitado corretamente.");

                return false;

            } else if (descricao === "" || descricao.length < 10) {

                alert("Por favor, verifique se o campo descrição foi digitado corretamente.");

                return false;

            } else if (

                cep === "" ||
                rua === "" ||
                bairro === "" ||
                regiao === "" ||
                cidade === "" ||
                estado === "" ||
                categoria === ""

            ) {

                alert("Por favor, preencha todos os campos obrigatórios.");

                return false;

            }

            return true;
        }



    
    </script>



@endsection