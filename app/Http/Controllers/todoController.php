<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class todoController extends Controller
{
  public function index()
  {
    $todos=Todo::all();
    
    //dd ($todos); view php mode text
    return  view('todo.index',['todos' => $todos]);
    }
    public function update(Request $request)
    {
        /*$todo = new Todo();                //create 1
        $todo->title = $request->title;
        $todo->save();*/

       /* $todo = Todo::create([            //create 2 
            'title' =>  $request->title,
        ]);*/
       $data= $request->validate([ 'title' => 'required|min:3|max:10']);
        $todo = Todo::create($data);  //create 3
        return redirect('todo');
       
    }
    public function destroy(Request $request,Todo $todo)
    {
        $todo->delete();
        return redirect('todo');
    }
}
