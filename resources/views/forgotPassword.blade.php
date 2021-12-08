@extends('layouts.master')

@section('header')
    @include('layouts.header')

@endsection

@section('content')
    @include('auth.forgot-password')

@endsection

@section('navLeft')
    @include('layouts.navLeft')

@endsection

@section('footer')
    @include('layouts.footer')

@endsection
