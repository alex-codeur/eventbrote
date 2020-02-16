@extends('layouts.app')

@section('content')
    <h1>Créer un évènement</h1>

    <div class="container">
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <div class="form-label-group">
                            <label for="title">Titre</label>
                            <input type="text" id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" placeholder="Titre de l'élèvenement">
                        </div>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description" class="control-label">Description</div>
                        <textarea id="description" cols="30" rows="10" name="description" placeholder="Description de l'élèvenement" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}">{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-block mt-3" type="submit">Créer l'évènement</button>
                    <div>
                </form>
    <a href="{{ route('home') }}">Annuler</a>
    </div>

@endsection