@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Show {{ $cards->title }} notes
                </div>

                <div class="panel-body">
                    @if(count($cards->notes)==0)
                        <h1 class="text-center">No Notes here</h1>
                    @else
                    @foreach($cards->notes as $note)

                        <li class="list-group-item" style="padding: 10px">{{ $note->body }}

                            <a href="#" class="pull-right">{{ $note->user->name }}</a>
                        </li>
                   @endforeach
                    @endif
                    <hr>
                       <header> Add a new node </header>

                           <form action="/cards/{{ $cards->id }}/notes" method="POST">
                               {{ csrf_field() }}

                               <div class="form-group">
                               <label for="body"></label>
                               <textarea name="body" class="form-control"> {{old('body')}}</textarea>
                               </div>
                               <div>
                                   <input type="submit" class="btn btn-success pull-right">
                               </div>
                           </form>
                      <hr>

                       @if(count($errors))

                               <ul>
                                   @foreach($errors->all() as $error)
                                   <li>
                                       {{ $error }}
                                   </li>
                               </ul>
                           @endforeach
                           @endif
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection