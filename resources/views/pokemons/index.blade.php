<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pokemons</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="#">Pokemons</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class=" btn btn-light" href="{{ url('pokemons/create') }}">Adicionar pokemon</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<!-- Exibir uma mensagem de sucesso, se houver -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Verificar se existem pokemon cadastrados -->
@if($pokemon->count())
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Pontos de Poder</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop através dos pokemons -->
            @foreach($pokemon as $pokemon)
                <tr>
                    <td>{{ $pokemon->nome }}</td>
                    
                    <td>{{ $pokemon->tipo }}</td>
              
                    <td>{{ $pokemon->pontos_de_poder }}</td>
                    <td>
                        <!-- Link para editar o pokemon -->
                        <a href="{{ url('pokemons/'.$pokemon->id.'/edit') }}" class="btn btn-warning">Editar</a>
                    
                        <!-- Formulário para deletar o pokemon -->
                        <form action="{{ url('pokemons/'.$pokemon->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mt-1">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
   

@else
    <p>Nenhum personagem encontrado.</p>
@endif
</body>
</html>