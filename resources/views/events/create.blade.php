@extends('layouts.app')

@section('content')
    <h1>Creér un évènement</h1>

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Titre de l'évènement"><br>
        {!! $errors->first('title', '<p class="error">:message</p>') !!}
        <textarea name="description" id="" cols="30" rows="10" placeholder="Dscription de l'évènement"></textarea><br>
        {!! $errors->first('description', '<p class="error">:message</p>') !!}
        <input type="submit" value="Créer un évènement">
    </form>

    <a href="{{ route('home') }}">Annuler</a>
@endsection