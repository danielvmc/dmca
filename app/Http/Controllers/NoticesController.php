<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class NoticesController extends Controller
{
    public function index()
    {
        return view('notices.index');
    }

    public function create()
    {
        // load a view to create a new notice
        return view('notices.create');
    }
}
