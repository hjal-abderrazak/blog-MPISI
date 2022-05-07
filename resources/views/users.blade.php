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
<table border="1" >
       
       <tr colspan="2" >
           
           <td>Nom</td>
           
           <td>Email</td>
           <td>Phone</td>
           <td>Code postal</td>
           <td>Adresse</td>
           <td>ville</td>
           <td>role</td>
           <td>action</td>
       </tr>
       @foreach($users as $user)
       <tr>
           
           <td>{{$user->name }}</td>
           <td>{{$user->email }}</td>
           <td>{{$user->phone }}</td>
           <td>{{$user->code_postale }}</td>
           <td>{{$user->adresse }}</td>
           <td>{{$user->ville }}</td>
           <td>{{$user->role }}</td>
           <td><a href="{{route('detailUser',$user->id)}}">profil</a></td>

       </tr>
 @endforeach
       </table>
       
@endsection

  
