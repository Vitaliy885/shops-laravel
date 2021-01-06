@extends('index')

@section('title') {{  $data->name }} @endsection

@section('content')
    <h1>{{  $data->name }}</h1>
    <div class="alert alert-info">
        <p>Name: {{  $data->name }}</p>
        <p>Surname: {{ $data->surname }}</p>
        <p>Text: {{ $data->message }}</p>
        <a href="{{ route('contact-data-message', $data->id) }}" class="btn btn-warning">Delete</a>
    </div>

@endsection
