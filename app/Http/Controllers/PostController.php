<?php

namespace App\Http\Controllers;

class PostController extends Controller
{



public function __construct()
{

}
    public function index()
    {
        $username = 'ismahen abdalladh';

        return view('welcome', compact('username'));
    }

    public function showId($id)
    {
        return view('ControllerParms', ['id' => $id]);
    }
}
