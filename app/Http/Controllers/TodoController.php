<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Redirect;

class TodoController extends Controller
{

    public function list(Request $request){
        return Todo::get();
    }
    public function addTodo(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'discription' => 'required',
            'status' => 'required'
        ]);

        $data = $request->post();
        unset($data["_token"]);
        // dd($data);
        Todo::create($data);
        return Redirect::back()->with('success', 'Todo added successfully!');
    }
    public function updateStatus(Request $request){
        // $validated = $request->validate([
        //     'status' => 'required'
        // ]);

        $data = $request;

        return $data;

        $todo = new Todo;
        $post->id = $data['id']; //already exists in database.
        $post->status = $data['status'];
        $post->save();

        return json_encode(["message" => "Data update successsfully"]);

    }
}
