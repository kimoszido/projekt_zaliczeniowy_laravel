<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
@extends('layouts.master')

@section('header')
    @include('layouts.header')

@endsection

@section('content')
    @include('content.categoryContent')

@endsection

@section('navLeft')
    @include('layouts.navLeft')

@endsection


@section('footer')
    @include('layouts.footer')

@endsection


