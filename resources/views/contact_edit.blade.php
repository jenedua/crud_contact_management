@extends('master')

@section('content')
<h2>Edit</h2>

@if(session()->has('message'))
{{session()->get('message')}}

@endif


<form action="{{route('contacts.update', ['contact' =>$contact->id])}}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="{{$contact->Name}}">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label">Contact</label>
        <input type="text" class="form-control" name="contact" value="{{$contact->Contact}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" value="{{$contact->email}}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection