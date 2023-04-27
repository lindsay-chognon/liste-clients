<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un client</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Ajouter un client
        </div>
        <div class="card-body">
            <form method="post" action="{{url('clients')}}">
                @csrf
                <div class="form-group">
                    <label for="societe">Société</label>
                    <input type="text" id="societe" name="societe" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" class="form-control" required="">
                </div><div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" class="form-control" required="">
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

