@extends('./layout')
<nav class="navbar navbar-light bg-info">
  <span class="navbar-brand text-white mb-0 h1">Welcome to the Physics lab clearance portal</span>
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
      <td scope="row">{{ $element['id'] }}</td>
      <td>{{ $element['std_name'] }}</td>
      <td>{{ $element['date'] }}</td>
      <td>
        @if ($element['req_status']== 1 && $element['status']==1)
          <button class="btn btn-primary">Cleared</button>
        @else
            @if ($element['req_status']==1 && $element['status']==0)
              <button class="btn btn-primary">Requested</button>
              <a href="{{url('/status_update',$element->id)}}" class="btn btn-success">Active</a>
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
    <div id="notifDiv"></div>
  </table>
</div>
@push('scripts')
<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
</script>

<script>
$('.toggle-class').on('change', function() {
        var status = $(this).prop('checked') == 1 ? 1 : 0;
        var user_id = $(this).data('id');
        $.ajax({
            type: 'GET',
            dataType: 'JSON',
            url: "/changeStatus",
            data: {
                'status': status,
                'user_id': user_id,
            },
            success:function(data) {
                $('#notifDiv').fadeIn();
                $('#notifDiv').css('background', 'green');
                $('#notifDiv').text('Status Updated Successfully');
                setTimeout(() => {
                    $('#notifDiv').fadeOut();
                }, 3000);
              }
        });
    });
  </script>
@endpush