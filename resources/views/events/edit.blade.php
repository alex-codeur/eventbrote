@extends('layouts.app')

@section('content')
    <h1> Editer l'évènement #{{ $event->id }}</h1>

    <div class="container">
                <form action="{{ route('events.update', $event) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="title">Titre</label>
                            <input type="text" id="title" name="title" value="{{ old('title') ?? $event->title }}" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" placeholder="Titre de l'élèvenement">
                        </div>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description" class="control-label">Description</div>
                        <textarea id="description" name="description" cols="30" rows="10" placeholder="Description de l'élèvenement" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">{{ old('description') ?? $event->description }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block mt-3" type="submit">Modifier l'évènement</button>
                    <div>
                </form>
    <a href="{{ route('home') }}">Annuler</a>
    </div>

@endsection