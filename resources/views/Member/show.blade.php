@extends('master')

@section('content')
  <h1>Detail Member</h1>

<div>
  <p> Nim : {{$member2->Nim}}</p>
  <p> Nama : {{$member2->Nama}}</p>
  <p> Tlp : {{$member2->Tlp}}</p>
</div>
<a href="{{route('Member.index')}}">
Back to Member
</a>

@endsection
