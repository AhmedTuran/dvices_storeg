<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>up date</title>
</head>
<body>
@include('navbar') 
<br>
    <div class="text-center"><h3>up date</h3> </div>
    <div class="container my-5">
        <form method="post" action="{{ route('dev.update',$dev->id) }}">
            @csrf
            @method('put')
            @include('form')

           <div class="text-center col-6 mb3"> <button class="btn btn-dark btn-lg w-30">Update</button></div> 
           <div class="text-center col-6 mb3"><a class="btn btn-secondary btn-lg w-30 " href="http://127.0.0.1:8000/dev">shwo the processes</a></div>
        </div>
        </form>
  
</body>
</html>