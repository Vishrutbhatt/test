
    <html>
    <head><title>Employees Details</title></head>
     <body>
      <h2><u><center>Employee's Detail</center></u></h2>

 

      <table border="1" align ="center">
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Department</th>
          <th>contact No.:</th>
        </tr>
        @foreach($employees as $employee)
          <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->department }}</td>
            <td>{{ $employee->contact }}</td>
            <td><a href="{{route('employees.edit',['id'=>$employee->id])}}">Edit</a></td>
            <td><a href="{{route('employees.delete',['id'=>$employee->id])}}">Delete</a></td>
          </tr>
        @endforeach
      </table>
        {{ $employees->links() }}  <!-- this links is for the pagination-->
     </body>
    </html>  