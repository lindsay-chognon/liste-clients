<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un nom de domaine</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Ajouter un nom de domaine
        </div>
        <div class="card-body">
            <form method="post" action="{{url('noms_de_domaine')}}">
                @csrf
                <div class="form-group">
                    <label for="nom_domaine">Nom de domaine</label>
                    <input type="text" id="nom_domaine" name="nom_domaine" class="form-control" required="" value="{{ old('nom_domaine')  }}" >
                </div>
                <div class="form-group">
                    <label for="cout_annuel">Cout annuel en €</label>
                    <input type="number" id="cout_annuel" name="cout_annuel" class="form-control" pattern="[0-9]+" required="" value="{{ old('cout_annuel')  }}">
                </div>

                <div class="form-group">
                    <label for="client">Client</label>
                    <select name="client" id="client" class="form-control">
                        @foreach($clients as $client)
                            <option {{ old('client') == $client->id ? 'selected = "selected"' : '' }} value="{{ $client->id }}">{{ $client->societe }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{ route('noms_de_domaine.index')  }}" class="btn btn-danger">Retour</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>

