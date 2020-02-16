@extends('layouts.app')

@section('content')
    <h1>{{ $events->count() }}  Evènements</h1>


    @if(count($events) > 0)
        <ul>
            @foreach($events as $event)
                <li><a href="{{ route('events.show', ['event' => $event->id]) }}">{{ $event->title }}</a></li>
            @endforeach
        </ul>

        {{ $events->links() }}
    @else
        <p>Aucun évènement pour le moment.</p>
    @endif
@endsection