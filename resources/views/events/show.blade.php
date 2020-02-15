@extends('layouts.app')

@section('content')
    <h1>{{ $event->title }}</h1>

    <p>{{ $event->description }}</p>

    <a href="{{ route('events.edit', $event) }}">Modifier</a> |
    <form action="{{ route('events.destroy', $event) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Supprimer">
    </form>
    <a href="{{ route('home') }}">Tous les évènements</a>
@endsection