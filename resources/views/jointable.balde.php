<html>

<head>
		<tille>Join Table Detial</tille>
</head>	
	<body>

	<table>
		<th>UID</th><th>Name</th><th>Age</th><br /> 
		@foreach($data as $value)
			<tr>
			<td>{{( $value->country_name )}}</td>
			<td>{{( $value->state_name )}}</td> 
			<td>{{( $value->city_name )}}</td>

			</tr><br />	
		@endforeach
	</table>
</body>
</html>
