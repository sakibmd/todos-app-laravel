@extends('layouts.app')

@section('content')
<h2 class="text-center my-5">{{ $todo->name }}</h2>
<div class="row justify-content-center" >
     <div class="col-md-6">
         <div class="card card-default">
             <div class="card-header">
                 Details
             </div>
             <div class="card-body">
                 {{ $todo->description }}
             </div>
         </div>
         <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-info my-2">Edit</a>
         <a href="{{ route('todos.destroy', $todo->id) }}" class="btn btn-danger my-2">Delete</a>
     </div>
</div>
@endsection
      
