
@extends('layouts.master')

@section('header')
    @include('layouts.header')

@endsection

@section('content')
    @include('auth.register')

@endsection

@section('navLeft')
    @include('layouts.navLeft')

@endsection

@section('footer')
    @include('layouts.footer')

@endsection


