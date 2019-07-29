<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
<title>TODOS</title>
<h1> TODOS PAGE </h1>

@foreach($todos as $todo)
   <ul>
    <li> 

    {{ $todo->name }}

    </li>
    

    @endforeach
  </ul> 
</html>
