<!DOCTYPE html>
<html>
<head>
    <title>Consulter {{ $nom_de_domaine->nom_domaine  }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Modifier {{ $nom_de_domaine->nom_domaine  }}
        </div>
        <div class="card-body">
                <div class="form-group">
                    <label for="nom_domaine">Nom de domaine</label>
                    <input disabled type="text" id="nom_domaine" name="nom_domaine" class="form-control" value="{{ $nom_de_domaine->nom_domaine  }}">
                </div>
                <div class="form-group">
                    <label for="cout_annuel">Cout annuel</label>
                    <input disabled type="text" id="cout_annuel" name="cout_annuel" class="form-control" pattern="[0-9]+" value="{{ $nom_de_domaine->cout_annuel }} €">
                </div>
                <div class="form-group">
                    <label for="client">Client</label>
                    <input disabled type="text" id="client" name="client" class="form-control" value="{{ $nom_de_domaine->client->societe  }}" >
                </div>

            <a href="{{ route('noms_de_domaine.index')  }}" class="btn btn-danger">Retour</a>


        </div>
    </div>
</div>
</body>
</html>


