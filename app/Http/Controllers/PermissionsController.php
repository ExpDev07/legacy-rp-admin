<?php

namespace App\Http\Controllers;

class PermissionsController extends Controller
{
    public function index()
    {
        return view('admin.permissions.index');
    }
}
