<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        return view('todos.index')->with('todos', Todo::all());
    }

    public function show(Todo $id){
        return view('todos.show')->with('todo', $id);
    }
    public function create(){
        return view('todos.create');
    }
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);

        $todo = new Todo();
        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->completed = false;
        $todo->save();
        session()->flash('success', 'Task added successfully!');
        return redirect(route('todos.all'));
    }

    public function edit(Todo $todo){
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Request $request, Todo $todo){
        $this->validate($request, [
            'name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);
        $todo->name = $request->name;
        $todo->description = $request->description;
        $todo->completed = false;
        $todo->save();
        session()->flash('success', 'Task updated successfully!');

        return redirect(route('todos.all'));
    }

    public function destroy(Todo $todo){
        $todo->delete();
        session()->flash('success', 'Task deleted successfully!');

        return redirect(route('todos.all'));
    }
}
