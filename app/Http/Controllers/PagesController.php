<?php namespace App\Http\Controllers;

class PagesController extends Controller {


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }

}