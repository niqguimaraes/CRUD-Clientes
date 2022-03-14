<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/720488bb1e.js" crossorigin="anonymous"></script>

    <title>Controle de clientes</title>
  </head>
  <body class="container text-center">

  <div class="d-flex justify-content-between align-items-center">
    <div class="display-4">Clientes cadastrados</div>
    <a class="btn btn-lg btn-success" href="{{ route('clientes.create') }}">Cadastrar novo cliente</a>
  </div>
  
  <!-- FORM PARA BUSCAR A PLACA DO VEÍCULO -->
  <form class="form-inline d-flex justify-content-end mt-3 mb-3" method="GET" action="/final-placa">
    <div class="input-group">
      <input class="form-control" type="search" placeholder="Buscar final da placa" name="final_placa">
      <div class="form-control-btn">
        <button class="btn btn-primary" type="submit" name="buscar">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <div class="row m-1 p-2 bg-dark text-white d-flex align-items-center">
    <div class="col-1"><h5>Registro</h5></div>
    <div class="col-3"><h5>Nome</h5></div>
    <div class="col-2"><h5>Telefone</h5></div>
    <div class="col-2"><h5>CPF</h5></div>
    <div class="col-1"><h5>Placa</h5></div>
    <div class="col-3"><h5>Ações</h5></div>
  </div>
  
  @foreach($clientes as $cliente)
  <div class="row m-1 p-2 bg-light d-flex align-items-center rounded">
    <div class="col-1">{{ $cliente->id }}</div>
    <div class="col-3">{{ $cliente->nome }}</div>
    <div class="col-2">{{ $cliente->telefone }}</div>
    <div class="col-2">{{ $cliente->cpf }}</div>
    <div class="col-1">{{ $cliente->placa_carro }}</div>
    <form class="col-3" action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
      <a class="btn btn-sm btn-secondary" href="{{ route('clientes.show', $cliente->id) }}">Detalhes</a>
      <a class="btn btn-sm btn-warning" title="Editar" href="{{ route('clientes.edit', $cliente->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
      @csrf
      @method('DELETE')        
      <button class="btn btn-sm btn-danger" title="Excluir" type="submit"><i class="fa-solid fa-trash-can"></i></button>
    </form>
  </div>
  @endforeach

  @if($status = Session::get('mensagem'))
    <h5 class="text-warning">{{ $status }}</h5>
  @endif

    <!-- Separate Popper and Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  </body>
</html>