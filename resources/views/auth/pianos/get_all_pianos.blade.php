@extends('layouts.template')

@section('content')
    
    <h1>Liste des pianos</h1>
        
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Marque</th>
                <th>Référence</th>
                <th>Couleur</th>
                <th>Description</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pianos as $piano)
            <tr>
                <td>{{ $piano->name}}</td>
                <td>{{ $piano->marque}}</td>
                <td>{{ $piano->kind->name}}</td>
                <td>{{ $piano->couleur}}</td>
                <td>{{ $piano->description}}</td>
                <td><a style="color: white"; href="{{ route('edit', $piano->id) }}"><button class="btn btn-primary">Modifier</button></a></td>
                <td style="width: 8vw">
                <form method="POST" action="{{ route ('delete', $piano->id) }}">
                @csrf
                <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>  
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
@endsection
