<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un nom de domaine</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Ajouter un nom de domaine
        </div>
        <div class="card-body">
            <form method="post" action="{{url('noms_de_domaine')}}">
                @csrf
                <div class="form-group">
                    <label for="nom_domaine">Nom de domaine</label>
                    <input type="text" id="nom_domaine" name="nom_domaine" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="cout_annuel">Cout annuel</label>
                    <input type="number" id="cout_annuel" name="cout_annuel" class="form-control" pattern="[0-9]+" required="">
                </div>

                <div class="form-group">
                    <label for="client">Client</label>
                    <select name="client" id="client" class="form-control">
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->societe }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

