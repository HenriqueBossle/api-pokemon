<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pokemon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Editar Pokemon</h1>
    <a href="{{ url('pokemons/'.$pokemon->id.'/edit' )}}"></a>
    <form action="{{ url('pokemons/'.$pokemon->id) }}" method="post"> 
    @csrf
    @method('PUT')
        <div class="form-group">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite um nome" value="{{ $pokemon->nome }}">
            </div>
            <br>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" name="tipo" placeholder="Tipo do pokemon" value="{{ $pokemon->tipo }}">
            </div>
            <br>
            <div class="form-group">
                <label for="pontos_de_poder">Pontos de poder:</label>
                <input type="integer" class="form-control" name="pontos_de_poder" value="{{ $pokemon->pontos_de_poder }}">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
            <br>
        </div>
    </form>
</div>
</body>
</html>