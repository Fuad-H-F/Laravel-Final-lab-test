@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                    <nav class="navbar navbar-inverse">
                        <div class="container-fluid">
                            <div class="navbar-header">
                            <a class="navbar-brand" href="{{route('home.index')}}">Home</a>
                            </div>
                            <ul class="nav navbar-nav">
                            <li class="active"><a href="{{route('home.profile')}}">Profile</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                            </ul>
                        </div>
                    </nav>
                
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
