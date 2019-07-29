<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
<title>TODOS</title>
<body>
<h1 class="text=center my-5"> TODOS PAGE </h1>
<div class="row justify-content-center">
 <div class="col-md-8.offset-md-2">
  <div class="container">
   <div class="card card-default">
    <div class="card-header">Todos </div>
        <div class="card-body">
          @foreach($todos as $todo)
           <ul class="list-group">
             <li class="list-group-item"> 

              {{ $todo->name }}

             </li>

         @endforeach
       </ul> 
     </div>
    </div>
   </div>
  </div>
  </div>
  </div>
  </body>
</html>
