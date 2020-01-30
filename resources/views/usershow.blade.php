<html>
	<head>
		<title>User Details</title>
		<style>
			table, tr, td {
  			border: 1px solid black;
}
		</style>
	</head>

	<body>
		<form action="{{url('/usershow')}}" method="POST">
			{{ csrf_field() }}
			
		<center>
		<table>
			<tr>
				<td>uid:<input type="text" name="uid"></td>
			</tr><br />
			<tr>
				<td>Name: <input type="text" name="uname"></td>
			</tr><br />
			<tr>
				<td>Age: <input type="text" name="age" ></td>
			</tr>	<br />
			<tr><td><input type="submit" value="Add"></td></tr>
		
		</table>
	    </center>
		</form>

	

			<table>
		<th>UID</th><th>Name</th><th>Age</th><br /> 
		@foreach($data as $value)
			<tr>
			<td>{{($value->uid)}}</td>
			<td>{{($value-> uname)}}</td> 
			<td>{{($value->age)}}</td>

			<td><button><a href = "/update/{{ $value->uid }}">Update</a></button></td>
			<td><button><a href="/delete/{{ $value->uid }}">Delete</a></button></td>
				</tr><br />	
		@endforeach
	</table>

	</body>

</html>
