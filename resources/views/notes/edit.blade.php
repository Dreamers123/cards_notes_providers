@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">

                <div class="panel-body">
                    <header> Edit the node </header>
                    <form action="/notes/{{ $note->id }}" method="POST">
                         {{ method_field('patch') }}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="body"></label>
                            <textarea name="body" class="form-control"> {{ $note->body }}</textarea>
                        </div>

                        <div>
                            <input type="submit" class="btn btn-success pull-right">
                        </div>

                    </form>


                </div>
            </div>
        </div>
    </div>
@endsection