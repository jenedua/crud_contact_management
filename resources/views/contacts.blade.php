@extends('master')

@section('content')
<a href="{{ route('contacts.create') }}">Create</a>

<hr>
<h2>Contact</h2>
<ul>
    @foreach($contacts as $contact)
    <li>
        {{ $contact-> Name}} | <a href="{{route ('contacts.edit', ['contact' => $contact->id])}}">Edit</a> | <a href="">Delete</a> <a href="">Show</a>
    </li>

    @endforeach
</ul>



@endsection