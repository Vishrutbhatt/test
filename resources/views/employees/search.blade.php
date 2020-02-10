<!--<html>
<body>

     <form action="/search" method="post">
        {{ csrf_field() }}
  <input type="search" name="search">
    <button type="submit">Search</button>
  </form>

      @if(isset($details))
<p> The Search results for your query <b> {{ $query }} </b> are :</p>
<h2>Sample User details</h2>
<table class="table table-striped">
<thead>
<tr>
<th>FirstName</th>
<th>Lastname</th>
</tr>
</thead>
<tbody>
@foreach($details as $e)
<tr>
<td>{{$e->firstname}}</td>
<td>{{$e->lastname}}</td>
</tr>
@endforeach
</tbody>
</table>
@endif

</body></html>