@extends('./layout')
<nav class="navbar navbar-light bg-info">
  <span class="navbar-brand text-white mb-0 h1">Welcome to the Account clearance portal</span>
  <form class="form-inline my-2 my-lg-0">
    <button class="btn btn-primary my-2 my-sm-0" type="submit">Update</button>
  </form>
</nav>
<div class="container-fluid" style="height: 92vh; background-color: white;">
  <table class="table table-hover">
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
      <td scope="row">{{ $element['id'] }}</td>
      <td>{{ $element['std_name'] }}</td>
      <td>{{ $element['date'] }}</td>
      <td>
        @if ($element['req_status']== 1 && $element['status']==1)
          <button class="btn btn-primary">Cleared</button>
        @else
            @if ($element['req_status']==1 && $element['status']==0)
              <button class="btn btn-primary">Requested</button>
              <a href="{{url('/status_update_account',$element->id)}}" class="btn btn-success">Active</a>
              @elseif($element['req_status']==0)
              <button class="btn btn-primary">Not Cleared</button>
            @else
              <button class="btn btn-primary">Not Cleared</button>
            @endif
          {{-- <input type="checkbox" class="toggle-class" data-id="{{ $element['id'] }}" data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled" {{ $element['status'] == 1 ? 'checked' : ''}}> --}}        
          @endif
      </td>
      <td>{{ $element['email'] }}</td>
    </tr>
    @endforeach
    
    {{-- <tr>
      <th scope="row">2</th>
      <td>Sabin Shrestha</td>
      <td>August 3,2021</td>
      <td><button type="button" class="btn btn-success rounded-circle">Cleared</button></td>
      <td>None</td>
      <td>sabin@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Saisab Bhattarai</td>
      <td>None</td>
      <td><button type="button" class="btn btn-danger rounded-circle">Not Cleared</button></td>
      <td>1,110</td>
      <td>saisab@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Bishal Karki</td>
      <td>August 3,2021</td>
      <td><button type="button" class="btn btn-success rounded-circle">Cleared</button></td>
      <td>None</td>
      <td>sikum@gmail.com</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Sikum Rai</td>
      <td>None</td>
      <td><button type="button" class="btn btn-danger rounded-circle">Not Cleared</button></td>
      <td>1,000</td>
      <td>sikum@gmail.com</td>
    </tr> --}}
  </table>
</div>