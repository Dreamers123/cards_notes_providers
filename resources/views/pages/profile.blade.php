@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <body style="background-color: lightblue">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $auth->name }}'s Profile</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Your age is {{ Carbon\Carbon::createFromDate(1991,10,5)->age}}</p>
                    <p>Hello {{ Auth::user()->name }}</p>
                    <p>Are you married <b>( 1 for Yes and 0 for No )</b>? </p>
                    <p> {{ $married }}</p>

            
                </div>
            </div>
        </div>
    </body>
</div>

@endsection
