@extends('layouts.app')

@section('content')
<div>
<h2 style="margin-left: 40px">{{ $users->count()}} users in the page</h2>
</div>
<div style="background-color: lightblue">

@foreach($users as $user)

<div class="row content" style="margin-left: 40px;">
     
     <div class="col-sm-8 sidenav" >
      <p><b>{!! $user['name'] !!} email id is </b></p>
    </div>
    <div class="col-sm-4 text-left"> 
   <p><b>{!! $user['email'] !!}</b></p>
   </div>
  </div>
 
@endforeach
{{ $users->links()}}

@endsection
</div>