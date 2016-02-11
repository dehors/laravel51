<?php

namespace laravel51\Http\Controllers;

use Illuminate\Http\Request;

use laravel51\Http\Requests;
use laravel51\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function reviews()
    {
       return view('reviews'); 
    }

}
