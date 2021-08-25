@extends('./layout')
<nav class="navbar navbar-light bg-info">
  <span class="navbar-brand text-white mb-0 h1">Welcome to the Bus clearance portal</span>
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
    @foreach ($bus_data as $element)
    <tr>
      <th scope="row">{{ $element['id'] }}</th>
      <td>{{ $element['std_name'] }}</td>
      <td>{{ $element['date'] }}</td>
      <td>
        @if ($element['req_status']== 1 && $element['status']==1)
          <button class="btn btn-primary">Cleared</button>
          @else
            @if ($element['req_status']==1 && $element['status']==0)
              <button class="btn btn-primary">Requested</button>
              <a href="{{url('/status_update_bus',$element->id)}}" class="btn btn-success">Active</a>
              @elseif($element['req_status']==0)
              <button class="btn btn-primary">Not Cleared</button>
            @else
            <button class="btn btn-primary">Not Cleared</button> 
            @endif
        @endif
      </td>
      <td>{{ $element['email'] }}</td>
    </tr>
    @endforeach
  </table>
</div>