@extends('./layout')
{{-- <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online CLearance</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://math.ku.edu.np">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://elf.ku.edu.np/forms/">Downloads</a>
        </li>
      </ul>
    </div>
    <form class="" action="home.html" method="get">
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
      </form>
    </form>
  </div>
</nav> --}}
{{-- <br> --}}
<nav class="navbar navbar-light bg-info">
  <span class="navbar-brand text-white mb-0 h1">Welcome to the Library clearance portal</span>
  <form class="form-inline my-2 my-lg-0">
    <button class="btn btn-primary my-2 my-sm-0" type="submit">Update</button>
  </form>
</nav>
<div class="container-fluid" style="height: 92vh; background-color: white;">
  <table class="table table-hover" style="background-color: white;">
    <thead>
      <tr>
        <th scope="col">S.N</th>
        <th scope="col">Requested by</th>
        <th scope="col">Date Cleared</th>
        <th scope="col" style="padding-left : 35px;">Status</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    @foreach ($std_data as $element)
    <tr>
      <th scope="row">{{ $element['id'] }}</th>
      <td>{{ $element['std_name'] }}</td>
      <td>{{ $element['date'] }}</td>
      <td>@if ($element['req_status']== 1 && $element['status']==1)
          <button class="btn btn-primary">Cleared</button>
        @else
            @if ($element['req_status']==1 && $element['status']==0)
              <button class="btn btn-primary">Requested</button>
              <a href="{{url('/status_update_lib',$element->id)}}" class="btn btn-success">Active</a>
              @elseif($element['req_status']==0)
              <button class="btn btn-primary">Not Cleared</button>
            @else
              <button class="btn btn-primary">Not Cleared</button> 
            @endif
          {{-- <input type="checkbox" class="toggle-class" data-id="{{ $element['id'] }}" data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled" {{ $element['status'] == 1 ? 'checked' : ''}}> --}}        
          @endif</td>
      <td>{{ $element['email'] }}</td>
    </tr>
    @endforeach
  </table>
</div>