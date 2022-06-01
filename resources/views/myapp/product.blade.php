@extends('layouts/main')
@section('content')
<h1>Product</h1>
<table border="3">
    <tr>
        <th>Name</th>
        <th>ID</th>
    </tr>
    @foreach($products as $p)
     <tr>
         <td><a href="{{route('myapp/about',['id'=>$p->id])}}">{{$p->name}}</a></td>
         <td>{{$p->id}}</td>
     </tr>
   @endforeach
</table>
@endsection