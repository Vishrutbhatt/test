
<html>
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>AGE</td>
            <td>EDIT</td>
         </tr>
         @foreach ($data as $value)
         <tr>
            <td>{{ $value->uid }}</td>
            <td>{{ $value->uname }}</td>
            <td>{{ $value->age }}</td>
            <td><a href = 'edit/{{ $value->uid }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>