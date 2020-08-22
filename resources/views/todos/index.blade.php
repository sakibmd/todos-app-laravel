@extends('layouts.app')

@section('content')
       <div class="row justify-content-center my-5" >
            <div class="col-md-8">
                @if (session()->has('success'))
                    <div class="alert alert-success my-3" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card card-default">
                    <div class="card-header">
                        Todos List
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($todos as $todo)
                                <li class="list-group-item">{{  str_limit($todo->name, 25)  }}

                                    

                                    <a href="{{ route('todos.show', $todo->id) }}" class="btn btn-primary btn-sm float-right ml-2">View</a>

                                    @if (!$todo->completed)
                                    <a href="{{ route('todos.completed', $todo->id) }}" class="btn btn-warning btn-sm float-right">Complete</a>
                                    @endif
                                
                                </li>
                                
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
       </div>
@endsection