@extends('layouts.app')

@section('content')
<div class="container mt-5">
    
    <form action="/photos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="url">Ajouter une photo</label>
            <input type="file" name="url" id="">
        </div>

        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>

</div>
@endsection