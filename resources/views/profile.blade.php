@extends('layout')
<div class="container-fluid" style="background-color: white; height: 100vh;">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" style="text-transform: capitalize;">Name : {{ $req_data[0]->name }}</th>
        <th scope="col">Department: {{ $req_data[0]->Department }}</th>
        <th scope="col" style="text-transform: capitalize;">Programme: {{ $req_data[0]->programme }}</th>
      </tr>
    </thead>
    <tr>
      <th scope="col">Batch: {{ $req_data[0]->batch }}</th>
      <th scope="col">RegNo: {{ $req_data[0]->reg_no }}</th>
      <th scope="col">MobileNo: {{ $req_data[0]->mobile_number }}</th>
    </tr>
  </div>
  <br><br>
  <div class="container" style="background-color: white;">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">S.N</th>
          <th scope="col">Clearance Department</th>
          <th scope="col">Date</th>
          <th scope="col">Status</th>
          <th scope="col">Cleared By</th>
        </tr>
      </thead>
      <tbody>
        {{-- <form action="requested_status" method="get"> --}}
          @foreach ($std_status as $data)
          <tr>
            <td scope="col">{{ $data['id'] }}</td>
            <td scope="col">{{ $data['department'] }}</td>
            <td scope="col">{{ $data['date'] }}</td>
            <td>@if ($data['status']==0 && $data['req_status']==0)
              {{-- <button onclick="changeText(this)" class="btn btn-danger btn1" id= "{{ $data['id'] }}" name="{{ $data['depa_name'] }}">Not Cleared</button> --}}
              <a  href="{{url('/status_request_account',$data['id'])}}" onclick="changeText(this)" class="btn btn-danger">Not Cleared</a> 
              @elseif($data['status']==0 && $data['req_status']==1)
              <button type="submit" class="btn btn-primary">Requested</button>
              @else
              <button type="submit" class="btn btn-success">Cleared</button>
              <td scope="col">{{ $data['cleared_by'] }}</td>
            @endif
          </td>
          </tr>
          @endforeach
        {{-- </form> --}}
      </tbody>
    </table>
  </div>
  <script type="text/javascript">
  function changeText(id)
  {
  id.innerHTML = "Requested";
  id.style.background = "purple";
  }
  </script>