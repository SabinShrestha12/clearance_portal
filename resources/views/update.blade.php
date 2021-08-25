<h4>update table</h4>
<form action="/edt" method="post">
	@csrf
	<input type="hidden" name="id" value="{{ $data['id'] }}">
	<input type="text" name="name" value="{{ $data["name"] }}"><br><br>
	<input type="email" name="email" value="{{ $data["email"] }}"><br><br>
	<input type="submit" name="submit" value="update">
</form>