@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        Your Application's Landing Page.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                @if(Auth::check())
                    <img src="{{ Auth::user()->avatar }}">
                    <p>{{ Auth::user()->username }}</p>
                    <p>{{ Auth::user()->steamid }}</p>
                    <p><a href="logout">LOGOUT</a></p>
                @else
                    <p><a href="steamlogin">Log into steam</a></p>
                @endif--}}

