@extends('layouts.app')

@section('content')
    <h1>{{ $event->title }}</h1>

    <p>{{ $event->description }}</p>

    <a class="btn btn-info" href="{{ route('events.edit', $event) }}">Modifier</a>
    <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline-block">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Supprimer">
    </form>

    <hr>

    <p><a href="{{ route('home') }}">Tous les évènements</a></p>
@endsection