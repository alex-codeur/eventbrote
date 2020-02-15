<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{ route('home') }}">Eventbrote</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <a href="{{ route('events.create') }}" class="btn btn-primary" type="submit"><img alt="plus" width="12px" src="{{ asset('/img/plus.svg') }}"><span class="mx-1">Créer un évènement</a></a>
</nav>