@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Show Cards
                </div>

                <div class="panel-body">
                    @foreach($cards as $card)
                        <a style="text-decoration: none" href="/cards/{{ $card->id }}"  > <h3>{{ $card->title }}</h3></a>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
@endsection