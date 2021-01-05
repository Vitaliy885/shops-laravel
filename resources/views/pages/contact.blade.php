@extends('index')

@section('title')Contact @endsection

@section('content')
    <h1>Contact</h1>

{{--    @if($errors->any())--}}
{{--        <div class="alert alert-danger">--}}
{{--            <ul>--}}
{{--                @foreach($errors->all() as $key => $error)--}}
{{--                    <li>{{ $error }}</li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    @endif--}}

    @include('components.messages')

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Surname</label>
            <input type="text" name="surname" class="form-control"  aria-describedby="TermHelp" placeholder="Surname">
            @error('surname')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Text</label>
            <input type="text" name="text" class="form-control" aria-describedby="TextHelp" placeholder="Text">
            @error('text')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
@endsection
