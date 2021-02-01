@extends('index')

@section('title')Messages @endsection

@section('content')
    @include('components.messages')
    <h1>Messages</h1>

    @foreach($data as $el)
        <div class="alert alert-info">
            <h4>{{ $el->name }} {{ $el->surname }}</h4>
            <p>{{ $el->message }}</p>
            <a href="{{ route('contact-data-message', $el->id) }}" class="btn btn-warning">Detail</a>
            <a href="{{ route('contact-data-delete', $el->id) }}" class="btn btn-danger">Delete</a>
        </div>
    @endforeach

@endsection
