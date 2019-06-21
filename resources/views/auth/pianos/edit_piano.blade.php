@extends('layouts.template')

@section('content')
<h1>vous êtes sur la page de modification !</h1>


<form method="POST" action="{{ route('update', $book->id) }}">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nom du piano" value="{{ $piano->name }}">
        </div>
        <div class="form-group">
            <label for="brand">Marque</label>
            <input type="text" class="form-control" name="brand" id="brand" placeholder="Marque du piano" value="{{ $piano->brand }}">
        </div>
        <div class="form-group">
            <label for="kind">Référence</label>
            <select name="kind_id" class="custom-select">
                @foreach ($kinds as $kind)
                <option value= {{ $kind->id }}  @if ( $kind->id == $piano->kind_id )
                    selected
                @endif>{{ $kind->name }}</option>

                @endforeach 
            </select>
            
            <div class="form-group">
            <label for="couleur">Couleur du piano</label>
            <input type="text" class="form-control" name="couleur" id="couleur " placeholder="Couleur du piano">
        </div>
        <div class="form-group">
            <label for="description">Description du piano</label>
            <input type="text" class="form-control" name="description" id="description " placeholder="Description du piano">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection