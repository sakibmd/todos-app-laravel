@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Create New Task</h1>
       <div class="row justify-content-center my-5" >
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Enter Info Here
                    </div>
                    <div class="card-body">
                        <form action="{{ route('todos.store') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                            @endif

                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="description" cols="5" rows="5" placeholder="Description">{{  old('description') }}</textarea> 
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-info">Create Task</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
       </div>
@endsection