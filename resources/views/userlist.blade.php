<blockquote>
	<table border="1">
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Operation</td>
		</tr>
			@foreach ($data as $element)
				<tr>
					<td>{{ $element['fname'] }}</td>
					<td>{{ $element['lname'] }}</td>
					<td><a href={{"update1/".$element['id'] }}>Edit</a>
						<a href={{"delete1/".$element['id']}}>Delete</a>
					</td>
				</tr>
			@endforeach
	</table>
</blockquote>