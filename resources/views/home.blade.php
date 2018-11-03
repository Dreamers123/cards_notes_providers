@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <body style="background-color: lightblue">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Hello {{ $auth->name }}</h1>
                    <p>your mail ID: {{ $auth->email }}</p>
                    You are logged in as {!! Auth::user()->name !!}!
                </div>
            </div>
        </div>
    </div>
    </body>
</div>

@endsection
