@extends('layout')

@section('content')

<h1>Clients</h1>
<ul>
    @foreach($clients as $client)
    <li>{{ $client->name }}</li>
    @endforeach
</ul>
<hr style="color:black;">

<div class="container">
    <form action="/clients" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo">
            @error('pseudo')

            @enderror
            <button type="submit" class="btn btn-primary mt-1" >Ajouter le client</button>

        </div>
    </form>
</div>

@endsection
