

@extends('layouts.nav')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8">
        <h1>inheritance Me </h1>
    </div>
    <div class="mt-8">
        this is inheritance Page
    </div>
</div>
@endsection
{{-- @section('title')
inheritance
@endsection --}}

@section('sidebar')
{{--  yo3red el sidebars w yzid 3lih <p></p> --}}
    @parent
    sidebar parents with child :
    <h1> This is appended to the master sidebar.</h1>
@endsection
@section('title' , 'inheritance')

