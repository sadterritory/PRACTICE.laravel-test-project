<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    //action
    public function index() {
        return 'this is index action of WorkerController';
    }

    public function show() {
        return 'this is show action of WorkerController';
    }
}
