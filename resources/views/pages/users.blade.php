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
                <h1 class="my-4">Les utilisateurs</h1>
    
               <div class="col">
                    @auth
                        @foreach ($users as $user)
                            <div>
                                <h4>{{$user->id. ', '. $user->profiles->name. ', '.$user->profiles->firstname. ', '.$user->profiles->age}}</h4> <br>
                            </div>
                        @endforeach
                    @endauth
               </div>
            </div>
        </div>
    </div>
@endsection
