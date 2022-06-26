<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class todoController extends Controller
{
    

    public function index(){

      $todos =  Todo::all();


        return view('index',['todos'=>$todos]);
    }

    public function show($id){
        return view('show')->with('todo',Todo::find($id));
    }


    public function create(){
        return view('create');
    }


    public function store(Request $request){


         $request->validate([
            'todoTitle' => 'required',
            'todoAddress' => 'required',
        ]);

        // dd($request);

        // return $request->all();


        // return $request->input();


        // return $request->input('todoTitle');

        // return $request->todoTitle;

      // get instance from Model
      
        $todo = new Todo();


        $todo->title = $request->todoTitle;
        $todo->Address = $request->todoAddress;

        $todo->save();

        session()->flash('success','add task successfully');


        return redirect('/todos');


    }


    public function edit($todo){
        $todo = Todo::find($todo);
        return view('edit')->with('todo',$todo);
    }


    public function update(Request $request ,$todo){
        $request->validate([
            'todoTitle' => 'required',
            'todoAddress' => 'required',
        ]);


        $todo = Todo::find($todo);
        $todo->title = $request->get('todoTitle');
        $todo->Address = $request->get('todoAddress');

        $todo->save();
        return redirect('/todos');

       

    }


    public function delete($todo){
        $todo = Todo::find($todo);
        $todo->delete();
        return( redirect('/todos'));
    }




    public function complete(Todo $todo){
        $todo->compleated =true;

        $todo->save();
        return redirect('/todos');
    }
}
