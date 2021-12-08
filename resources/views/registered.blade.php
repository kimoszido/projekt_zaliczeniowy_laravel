@extends('layouts.master')

@section('header')
    @include('layouts.header')

@endsection

@section('content')
    @include('auth.registered')

@endsection

@section('navLeft')
    @include('layouts.navLeft')

@endsection

@section('footer')
    @include('layouts.footer')

@endsection


