@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
    <div class="sidebar-module">
        <h4>About</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur itaque neque possimus? Aut perferendis porro possimus quae voluptate! Nostrum sed, totam. Culpa cupiditate explicabo itaque mollitia odit, omnis quaerat sequi.</p>
    </div>
@endsection

@section('content')
    @include('default.content')
@endsection