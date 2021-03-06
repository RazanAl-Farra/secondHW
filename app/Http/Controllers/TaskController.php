<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TaskController;


class TaskController extends Controller
{
    public function index(){
        /*$tasks = DB::table('tasks')->get();
        */
        $tasks = DB::table('tasks')->where('name', 'like', 'Task%')->get();
    return view('contact',compact('tasks'));
    }

    public function show($id){
        $task = DB::table('tasks')->find($id);
        return view('task',compact('task'));
    }
}
