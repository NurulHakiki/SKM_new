@extends('masterhome')

@section('konten')
<h4>Selamat Datang <b>{{Auth::user()->username}}</b>.</h4>
@endsection