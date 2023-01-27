<?php

namespace App\Http\Controllers\TaskView;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskViewController extends Controller
{
    public function index(){
        return view('taskApp.index');
    }

    public function mainPage(){
        return view('taskApp.mainPage');
    }
}
