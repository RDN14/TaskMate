<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    function home()
    {
        return view("todo.homepage");
    }

    function create()
    {
        return view("todo.create");
    }

    function edit()
    {
        return view("todo.edit_task");
    }

    function detail()
    {
        return view("todo.task_detail");
    }

    function akun()
    {
        return view("todo.halaman_akun");
    }
}
