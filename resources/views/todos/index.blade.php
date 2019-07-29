<html>
<title>TODOS</title>
<h1> TODOS PAGE </h1>

@foreach($todos as $todo)
    <li> 

    {{ $todo->name }}

    </li>

    @endforeach
</html>
