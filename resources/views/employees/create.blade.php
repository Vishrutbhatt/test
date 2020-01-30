<html>
	<head>
		<title>Employee Form</title>	
	</head>

	<body>
		
		@if($errors->any())
  		  <div class="alert alert-danger">
        <p><strong>Alert!!</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif


		<form action="{{route('employees.insert')}}" method="post">
			@csrf
		<center>
			<table style="border: 1px solid black">
			<tr>
				<th><h3>Employee Form</h3></th>
			</tr>			

			<tr>
				<td><label>Firstname:</label></td>
				<td><input type="text" id="firstname" name="firstname" required /></td>
			</tr> <br/>
			
			<tr>
				<td><label>Lastname:</label></td>
				<td><input type="text" id="lastname" name="lastname" required/></td>
			</tr> <br/>
			
			<tr>
				<td><label>Department:</label></td>
				<td><input type="text" id="department" name="department"  required/></td>
			</tr> <br/>
		
			<tr>
				<td><label>Contact:</label></td>
				<td><input type="text" id="contact" name="contact" required/></td> 
				<!-- pattern="[0-9]*" -->
			</tr> <br/>
		
			<tr> 
				<td>
					<button type="submit" name="submit">Add</button> 
				</td> 
			</tr>
		
		</center>
			</table>
		</form>
	
	</body>


</html>