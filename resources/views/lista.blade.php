<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #0B1D26;
            border-radius: 8px;
            padding: 20px;
        }

        .container h1 {
            text-align: center;
            color: #9C7A65;
            font-size: 34px;
        }

        .table thead, .table th, .table td {
            vertical-align: middle;
        }

        .btn-success, .btn-danger {
            padding: 6px 12px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="background-color: #0B1D26">

<a href="{{ route('home') }}">
  <svg xmlns="http://www.w3.org/2000/svg" style="color: white; margin-top: 2%; margin-left: 2%" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
  </svg>
</a>

<div class="container mt-5">
    <br> <h1>Aguardando aprovação</h1> <br> <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th style="background-color: #0B1D26; color: #fff" scope="col">ID</th>
                <th style="background-color: #0B1D26; color: #fff" scope="col">Nome</th>
                <th style="background-color: #0B1D26; color: #fff" scope="col">CNPJ</th>
                <th style="background-color: #0B1D26; color: #fff" scope="col">Email</th>
                <th style="background-color: #0B1D26; color: #fff" scope="col">Telefone</th>
                <th style="background-color: #0B1D26; color: #fff" scope="col">Site</th>
                <th style="background-color: #0B1D26; color: #fff" scope="col">Cadastrar</th>
                <th style="background-color: #0B1D26; color: #fff" scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <th style="background-color: #0B1D26; color: #fff" scope="row">{{ $usuario->id }}</th>
                <td style="background-color: #0B1D26; color: #fff">{{ $usuario->nome }}</td>
                <td style="background-color: #0B1D26; color: #fff">{{ $usuario->cnpj }}</td>
                <td style="background-color: #0B1D26; color: #fff">{{ $usuario->email }}</td>
                <td style="background-color: #0B1D26; color: #fff">{{ $usuario->telefone }}</td>
                <td style="background-color: #0B1D26; color: #fff">{{ $usuario->site }}</td>
                <td style="background-color: #0B1D26; color: #fff">
                    <form action="{{ route('cadastrar.usuario', $usuario->id) }}" method="post">
                        @csrf
                        <button class="btn btn-success">Aprovar</button>
                    </form>
                </td>
                <td style="background-color: #0B1D26; color: #fff">
                    <form action="{{ route('excluir.usuario', $usuario->id) }}" style="background-color: #0B1D26; color: #fff" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Desativar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
