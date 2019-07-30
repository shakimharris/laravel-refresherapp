@extends('layout.app')


@section('content')
<h1 class="text-center my-5">Create Todos </h1>
 <div class="card card-default">
  <div class="card-header">
  Create a new todo 
    </div>
     <div class="card-body">
      <div class="row justify-content-center">
       <div class="col-md-8">
        <form action="">

         <div class="form-group">
    
           <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                       </form> 
             <div class="form-group">
              <textarea name="description" placeholder="Description" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>

              <div class="form-group text-center">
               <button class="btn btn-info">Create todo</button> 

               </div>
             
                   </div>
                  </div>
               </div>
            </div> 
         </div>

@endsection