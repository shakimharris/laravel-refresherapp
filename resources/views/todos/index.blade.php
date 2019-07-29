<html>
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
