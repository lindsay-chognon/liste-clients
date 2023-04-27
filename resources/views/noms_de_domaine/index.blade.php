<!DOCTYPE html>
<html>
<head>
    <title>Liste des noms de domaine</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                </tr>
                </thead>
                <tbody>
                @foreach($noms_de_domaine as $nom_de_domaine)
                    <tr>
                        <td>{{ $nom_de_domaine->nom_domaine  }}</td>
                        <td>{{ $nom_de_domaine->cout_annuel  }} €</td>
                        <td>{{ $nom_de_domaine->client->societe  }} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>


