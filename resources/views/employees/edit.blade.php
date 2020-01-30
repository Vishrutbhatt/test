<html>

	<head>
			<title>Form Edit</title>
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

			<form action="{{route('employees.update')}}" method="post">    
				@csrf
				<center>
			<table>
			<tr>
				<th><h3>Employee Form</h3></th>
			</tr>			

			<tr>
				<td>
					<label>Firstname:</label>
				</td>
				<td>
					<input type="text" id="firstname" name="firstname" required value=
					"{{$employees->firstname}}" />
				</td>
			</tr> <br/>
			
			<tr>
				<td>
					<label>Lastname:</label>
				</td>
				<td>
					<input type="text" id="lastname" name="lastname" required value="{{$employees->lastname}}"/>
				</td>
			</tr> <br/>
			
			<tr>
				<td>
					<label>Department:</label>
				</td>
				<td>
					<input type="text" id="department" name="department"  required value="{{$employees->department}}"/>
				</td>
			</tr> <br/>
		
			<tr>
				<td>
					<label>Contact:</label>
				</td>
				<td>
					<input type="text"  id="contact" name="contact" required value="{{$employees->contact}}"/> <!--pattern="[0-9]*" -->
				</td>
			</tr> <br/>
		
			<tr> 
				<td>
					 <input type="hidden" name="id" value = "{{$employees->id}}">
					<button type="submit" name="submit">Add</button> 
				</td> 
			</tr>
		
		</center>
			</table>
			</form>


	</body>

</html>