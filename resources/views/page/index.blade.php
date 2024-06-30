<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>render</title>
</head>
<body>
    <form action="/insert_nom" method="post">
        @csrf
        <label for="nom">nom</label>
        <input type="text" name="nom" placeholder="saisir votre nom">
        <button type="submit" name="action" value="affecter">Valider</button>
    </form>

    @if(session('success'))
    <div class="alert alert-success" style="text-align: center;">
    <div style="color: green;">
        {{ session('success') }}
    </div>
</div>
    @endif
    <ul>
        @foreach ($client as $c)
        <li>{{$c->nom}}</li>
        @endforeach
    </ul>

</body>
</html>