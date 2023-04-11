@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">surname</th>
      <th scope="col">phone_number</th>
      <th scope="col">email</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->surname}}</td>
      <td>{{$user->Phone_number}}</td>
      <td>{{$user->email}}</td>
      <td><button type="button" class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">X</button></td>
      
    </tr>
   @endforeach
  </tbody>
</table>
{{ $users->links() }}
    
</div>
@endsection
@section('javascript')
$(function() {
  $('.delete').click (function(){
        $.ajax({
      type: "DELETE",
      url: "http://127.0.0.1:8000/users/" + $(this).data("id")
      //data: {id: $(this).data("id")}
      
      })
      .done(function(response){
        alert("success");
        window.location.reload();
      })
      .fail(function(response){
        alert("Erorr");
      })
  })
  
  
});
  
@endsection
