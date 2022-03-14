<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Controle de clientes</title>
  </head>
  <body class="container text-center">
    <div class="d-flex justify-content-center align-items-center">
      <div class="display-4">Cadastro de clientes</div>
    </div>
    
    <form class="form-group container mt-5 w-50 bg-light p-5" action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <input type="text" class="form-control m-3" name="nome" placeholder="Nome">
        <input type="text" class="form-control m-3" name="telefone" placeholder="DDD + telefone">
        <input type="text" class="form-control m-3" name="cpf" placeholder="CPF">
        <input type="text" class="form-control m-3" name="placa_carro" placeholder="Placa do carro">
        <button type="submit" class="btn btn-success w-75 m-3">
            Salvar
        </button>
    </form>
    <a href="{{ route('clientes.index') }}" class="lead text-decoration-none text-dark">Voltar para a tela inicial</a>

    @if($status = Session::get('mensagem'))
      <h5 class="text-success">{{ $status }}</h5>
    @endif
      
    @if($errors->any())
        <h5 class="text-danger">Houve algum erro ao processar o formulário</h5>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif




    






    <!-- Separate Popper and Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  </body>
</html>