<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>show devices</title>
</head>
<body>
    @include('navbar') 
<br>
<div class="text-center">
<h3>devices mintenancy table</h3>
</div>
<!-- <div class="d-flex justify-content-center md-5">
<form action="{{route('dev.search')}}" method="post">
    @csrf 
<input type="text" name="search" placeholder="Search"> <input type="submit" value="search">
</form>
</div> -->

<br/>
<dev class="table_responsev">
    <table class="table" >
    <thead class="thead-light">
    <tr><th scope="col">device number</th>
    <th scope="col">device type</th>
    <th scope="col">counter of device</th>
    <th scope="col">style of divice</th>
    <th scope="col">divice category</th>
    <th scope="col">SN</th>
    <th scope="col">oner</th>
    <th scope="col">main oner</th>
    <th scope="col">maintenancy doc</th>
    <th scope="col">maintenancy price</th>
    <th scope="col">maintenancy date</th>
    <th scope="col">processes</th>
    </tr>
    </thead>
 @if($devices)
    @foreach($devices as $dev)
  <tr>
  <td> {{$dev -> device_no}} </td>
  <td>{{$dev -> type_of_device}}</td>
  <td>{{$dev->device_counter}}</td>
  <td>{{$dev-> divice_style}}</td>
  <td>{{$dev->divice_category}}</td>
  <td>{{$dev->SN}}</td>
  <td>{{$dev->oner}}</td>
  <td>{{$dev->main_oner}}</td>
  <td>{{$dev->maintenancy_doc}}</td>
  <td>{{$dev->maintenancy_price}}</td>
  <td>{{$dev->maintenancy_date}}</td>
  <td> <div class="col">
            <form action="{{route('dev.destroy', $dev->id)}}" method="post"><div class="text-center row-6 mb3">
            @csrf 
            @method('delete')    
            <button class="btn btn-outline-danger btn-lg w-30 " >delete</button></div></form>
                <form action="{{route('dev.edit',$dev->id)}}" method="get"><div class="text-center row-6 mb3">
                @csrf     
                <button class="btn btn-outline-primary btn-lg w-30 ">up date</button></div></form>
        </div>
  </td>
  </tr>
  @endforeach
  @else
  <tr><h2>cann't fined any data</h2></tr>
  @endif
    </table>
    </dev>
    </dev>
    <dev class="text-center row-6 ">
    <form action="{{ route('dev.create') }}" method="get"><button class="btn btn-dark btn-lg w-30 text-center " >inseart new prosses</button></form>
    </dev>
    
</body>
</html>