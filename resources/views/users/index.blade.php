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
      
    </tr>
   @endforeach
  </tbody>
</table>
    
</div>
@endsection
