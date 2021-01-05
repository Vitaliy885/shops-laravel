@extends('index')

@section('title')Messages @endsection

@section('content')

    <h1>Messages</h1>

    @foreach($data as $el)
        <div class="alert alert-info">
            <h4>{{ $el->name }} {{ $el->surname }}</h4>
            <p>{{ $el->message }}</p>
            <a href="" class="btn btn-warning">Detail</a>
        </div>
    @endforeach

@endsection
