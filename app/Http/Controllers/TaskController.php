<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index() {
        $data = Task::orderBy('created_at', 'desc')->get();        

        return view('home', ['data' => $data]);
    }

    public function create() {

        return view('create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => ['required']
        ]);
        
        Task::create($data);

        return redirect()->route('home');
    }

    public function update($id) {
        Task::where('id', $id)->update(['status' => 'done']);
        
        return redirect()->route('home');
    }

    public function delete($id) {
        Task::where('id', $id)->delete();
        
        return redirect()->route('home');
    }

}
