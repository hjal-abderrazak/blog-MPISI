@extends('layouts.app')
@section('content')

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>

<table border="1" style="width:50%;">

  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>subject</th>
    <th>message</th>
    <th>created_at</th>
    
    <th>Action</th>
    
  </tr>
  @foreach($contacts as $contact)
  <tr>
    <td>{{$contact->id}}</td>
    <td>{{$contact->name}}</td>
    <td>{{$contact->subject}}</td>
    <td>{{$contact->message}}</td>
    <td>{{$contact->created_at}}</td>
 <td><a href="{{route('detail',$contact->id)}}">detail</a> 
    <a href="{{route('delete',$contact->id)}}">supprimer</a>
    </td> 
    
  </tr>
    @endforeach
</table>


@endsection