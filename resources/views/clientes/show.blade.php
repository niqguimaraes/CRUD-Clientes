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

    <div class="d-flex justify-content-between align-items-center mb-5">
      <div class="display-4">Dados do cliente</div>
    </div>

    <div class="row p-2 bg-dark text-white d-flex align-items-center text-left display-4">
      <div class="col-10">{{ $cliente->nome }}</div>
      <div class="col text-right">{{ $cliente->id }}</div>
    </div>
    <div class="row p-2 bg-light d-flex align-items-center text-left">
      <div class="col-4 d-flex justify-content-between align-items-center border-right">
        <span class="lead font-weight-bold">Telefone</span>
        {{ $cliente->telefone }}
      </div>
      <div class="col-4 d-flex justify-content-between align-items-center border-right">
        <span class="lead font-weight-bold">CPF</span>
        {{ $cliente->cpf }}
      </div>
      <div class="col-4 d-flex justify-content-between align-items-center">
        <span class="lead font-weight-bold">Placa do carro</span>
        {{ $cliente->placa_carro }}
      </div>
    </div>
    <a href="{{ route('clientes.index') }}" class="lead text-decoration-none text-dark">Voltar para a tela inicial</a>

    <!-- Separate Popper and Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  </body>
</html>