<!DOCTYPE html>
<html>
<head>
    <title>Liste des noms de domaine</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/css.css')?>" type="text/css">
</head>
<body>
    <div class="row">
        <div class="col-5 p-5">
            <form action="{{ route('nom_de_domaine_search') }}" method="POST">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="search"
                           placeholder="Rechercher un nom de domaine"> <span class="input-group-btn">
                <button type="submit" class="btn btn-outline-info">
                    🔍
                </button>
            </span>
                </div>
            </form>
        </div>
        <div class="col-7 p-5 text-right">
            <form action="{{ route('noms_de_domaine.create')  }}">
                <button type="submit" class="btn btn-outline-info">
                    Créer un nom de domaine
                </button>
            </form>
        </div>

    </div>

    <div class="row">
        <div class="col-md px-5">
            <p class="text-center font-weight-bold">Liste des noms de domaines</p>

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <td>Nom de domaine</td>
                    <td>Coût annuel</td>
                    <td>Client</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($noms_de_domaine as $nom_de_domaine)
                    <tr>
                        <td>{{ $nom_de_domaine->nom_domaine  }}</td>
                        <td>{{ $nom_de_domaine->cout_annuel  }} €</td>
                        <td>{{ $nom_de_domaine->client->id  }} </td>
                        <td>
                            <a href="{{ route('noms_de_domaine.show', $nom_de_domaine->id) }}" class="btn btn-outline-info">
                                <img class="icone" src="{{ asset('eye.png') }}" alt="Icone de modification">
                            </a>
                            <a href="{{ route('noms_de_domaine.edit', $nom_de_domaine->id) }}" class="btn btn-outline-info">
                                <img class="icone" src="{{ asset('edit.png') }}" alt="Icone de modification">
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>


