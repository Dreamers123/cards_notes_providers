@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Cards
                </div>

                <div class="panel-body">
                    <form action="/cards/create" method="POST">

                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="title">Title</label>
                            <textarea name="title" class="form-control"> </textarea>
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