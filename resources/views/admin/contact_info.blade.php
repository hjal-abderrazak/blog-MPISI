@extends('layouts.app')
@section('content')



 
<tr>     <th>Id</th> <td>{{$contact->id}}</td>
</tr><br>
    <tr>   <th>Name : </th><td>{{$contact->name}}</td> </tr> <br>
   <tr>  <th>email : </th> <td>{{$contact->email}}</td> </tr> <br>
    <tr>  <th>subject  : </th> <td>{{$contact->subject}}</td> </tr> <br>
 <tr>    <th>phone : </th> <td>{{$contact->phone}}</td> </tr> <br>
 <tr>    <th>message : </th> <td>{{$contact->message}}</td> </tr> 
 
    
  

  
 @endsection