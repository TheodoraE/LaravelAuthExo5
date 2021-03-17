@extends('layouts.app')

@section('content')
<div class="m-5">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                    <a href="/home" class="btn btn-info">Images</a>
                    <a href="/photos/create" class="btn btn-info">Ajouter des images</a>
                </div>
                <div class="card-body">
                    <a href="/users" class="btn btn-info">Utilisateurs</a>
                </div>
            </div>
        </div>

        <div class="col-8">
            <h1 class="my-4">Les images de l'utilisateur</h1>

           <div class="row">
                @auth
                    @foreach ($photos as $photo)
                        <div class="m-2">
                            <img src="{{asset('storage/img/'.$photo->url)}}" alt="" height="200px"> <br>
                            <a href="/photos/{{$photo->id}}" class="btn btn-primary m-2">SHOW</a>
                        </div>
                    @endforeach
                @endauth
           </div>
        </div>
    </div>
</div>
@endsection
