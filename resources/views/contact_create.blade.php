@extends('master')

@section('content')
<h2>Create</h2>

@if(session()->has('message'))
{{session()->get('message')}}

@endif


<form action="{{ route('contacts.store')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" name="Name" placeholder="Your Name" value="Jean Jacques">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label">Contact</label>
        <input type="text" class="form-control" name="Contact" placeholder="Your Contact" value="345645678">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Your Email address" value="JJacque@gmail.com">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>



@endsection