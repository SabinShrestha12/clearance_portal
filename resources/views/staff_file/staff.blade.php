@extends('./layout')
<nav class="navbar navbar-light bg-info">
  <span class="navbar-brand text-white mb-0 h1">Depart you belong to:</span>
</nav>
<br><br>
<div class="container container1">
  
  <a href = "#" class="btn btn-primary btn-lg btn-block">Computer Lab</a><br><br>
  <a href = "{{ asset('staff_acc') }}"  class="btn btn-primary btn-lg btn-block staff_button">Account</a><br><br>
  <a href = "{{ asset('staff_bus') }}" class="btn btn-primary btn-lg btn-block">Bus</a><br><br>
  <a href = "{{ asset('staff_lib') }}" class="btn btn-primary btn-lg btn-block">Library</a><br><br>
  <a href = "{{ asset('staff_plab') }}" class="btn btn-primary btn-lg btn-block">Physics lab</a><br><br>
  <a href = "#" class="btn btn-primary btn-lg btn-block">School/Dept.Adminsitration</a><br><br>
</div>