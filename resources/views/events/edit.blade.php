@extends('layouts.app')

@section('content')
    <h1> Editer l'évènement #{{ $event->id }}</h1>

    <form action="{{ route('events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" placeholder="Titre de l'évènement" value="{{ old('title') ?? $event->title }}"><br>
        {!! $errors->first('title', '<p class="error">:message</p>') !!}
        <textarea name="description" id="" cols="30" rows="10" placeholder="Dscription de l'évènement">{{ old('title') ?? $event->description }}</textarea><br>
        {!! $errors->first('description', '<p class="error">:message</p>') !!}
        <input type="submit" value="Modifier un évènement">
    </form>

    <a href="{{ route('home') }}">Annuler</a>
@endsection