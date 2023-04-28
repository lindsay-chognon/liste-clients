<!DOCTYPE html>
<html>
<head>
    <title>Liste des noms de domaine</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo asset('css/css.css')?>" type="text/css">
</head>
<body>
    <div class="row">
        <div class="col-md">
            @if (session('message'))
                <div class="alert alert-info text-center m-5">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-6 p-5">
            <form class="form-icone" action="{{ route('nom_de_domaine_search') }}" method="POST">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="search"
                           placeholder="Rechercher un domaine"> <span class="input-group-btn">
                <button type="submit" class="btn btn-outline-info">
                    🔍
                </button>
            </span>
                </div>
            </form>
            @if(request()->is('nom_de_domaine_search'))
                <a href="{{ route('noms_de_domaine.index')  }}" class="btn btn-info">Revenir à la liste</a>
            @endif
        </div>

        <div class="col-6 p-5 text-right">
            <form action="{{ route('noms_de_domaine.create')  }}">
                <button type="submit" class="btn btn-outline-info">
                    Créer un nom de domaine
                </button>
            </form>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Trier par
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('noms_de_domaine?sort=domaine_asc')  }}">Domaine : A - Z</a>
                    <a class="dropdown-item" href="{{ url('noms_de_domaine?sort=domaine_desc')  }}">Domaine : Z - A</a>
                    <a class="dropdown-item" href="{{ url('noms_de_domaine?sort=cout_asc')  }}">Coût annuel croissant</a>
                    <a class="dropdown-item" href="{{ url('noms_de_domaine?sort=cout_desc')  }}">Coût annuel décroissant</a>
                </div>
            </div>
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
                        <td>{{ $nom_de_domaine->client->societe  }} </td>
                        <td>
                            <a href="{{ route('noms_de_domaine.show', $nom_de_domaine->id) }}" class="btn btn-outline-success">
                                <img class="icone" src="{{ asset('eye.png') }}" alt="Icone de visualisation d'un nom de domaine">
                            </a>
                            <a href="{{ route('noms_de_domaine.edit', $nom_de_domaine->id) }}" class="btn btn-outline-info">
                                <img class="icone" src="{{ asset('edit.png') }}" alt="Icone de modification d'un nom de domaine">
                            </a>
                            <form class="form-icone" action="{{ route('noms_de_domaine.destroy', $nom_de_domaine->id)  }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-outline-danger">
                                    <img class="icone" src="{{ asset('bin.png') }}" alt="Icone de suppression d'un nom de domaine">
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>


