@extends('index')

@section('title')Contact @endsection

@section('content')
    <h1>Contact</h1>
    <form action="/contact/submit" method="post">
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="password" class="form-control" id="exampleInputName1" placeholder="Name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputTerm1">Term</label>
            <input type="email" class="form-control" id="exampleInputTerm1" aria-describedby="TermHelp" placeholder="Term">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputText1">Text</label>
            <input type="email" class="form-control" id="exampleInputText1" aria-describedby="TextHelp" placeholder="Text">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
@endsection
