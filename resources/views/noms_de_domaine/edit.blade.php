<!DOCTYPE html>
<html>
<head>
    <title>Modifier {{ $nom_de_domaine->nom_domaine  }}</title>
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
            Modifier {{ $nom_de_domaine->nom_domaine  }}
        </div>
        <div class="card-body">
            <form action="{{ route('noms_de_domaine.update', $nom_de_domaine->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nom_domaine">Nom de domaine</label>
                    <input type="text" id="nom_domaine" name="nom_domaine" class="form-control" required=""
                           @if(!$errors->any()) value="{{ $nom_de_domaine->nom_domaine }}"
                           @else value="{{ old('nom_domaine')  }}"
                        @endif
                    >
                </div>
                <div class="form-group">
                    <label for="cout_annuel">Cout annuel en €</label>
                    <input type="number" id="cout_annuel" name="cout_annuel" class="form-control" pattern="[0-9]+" required=""
                           @if(!$errors->any()) value="{{ $nom_de_domaine->cout_annuel }}"
                           @else value="{{ old('cout_annuel')  }}"
                           @endif
                    >
                </div>

                <div class="form-group">
                    <label for="client">Client</label>
                    <select name="client" id="client" class="form-control">
                        @foreach($clients as $client)
                            @if(!$errors->any())
                                @if($nom_de_domaine->client->id === $client->id)
                                    <option value="{{ $client->id }}" selected>{{ $client->societe }}</option>
                                @else
                                    <option value="{{ $client->id }}">{{ $client->societe }}</option>
                                @endif
                            @else
                                <option value="{{ $client->id }}" {{ old('client')==$client->id ? 'selected="selected"' : '' }} >{{ $client->societe }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="{{ route('noms_de_domaine.index')  }}" class="btn btn-danger">Retour</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>


