<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav justify-content-center">
      
      <li class="nav-item me-3">
          <a class="nav-link active btn-outline-secondary" role="button" aria-current="page" href="http://127.0.0.1:8000/dev"><h4>show all devices</h4></a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link active btn btn-outline-secondary" role="button" aria-current="page" href="http://127.0.0.1:8000/dev/create"><h4>inseart new device</h4></a>
        </li>
        <li class="nav-item me-3 btn btn-dark"><h1>Welcome Hassan</h1></li>
        </ul>
      <form class="d-flex" action="{{route('dev.search')}}" method="post">
      @csrf  
      <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
     <!--  <form action="{{route('dev.search')}}" method="post">
    @csrf 
<input type="text" name="search" placeholder="Search"> <input type="submit" value="search">
</form> -->
    </div>
  </div>
</nav>