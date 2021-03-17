@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <img src="{{asset('storage/img/'.$show->url)}}" alt="" height="400px">
        </div>
        <a href="/home" class="btn btn-primary m-2">Go back</a>
    </div>
@endsection
