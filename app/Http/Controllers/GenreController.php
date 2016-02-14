<?php

namespace laravel51\Http\Controllers;

use Illuminate\Http\Request;
use laravel51\Gender;
use Validator;
use laravel51\Http\Requests;
use laravel51\Http\Controllers\Controller;

class GenreController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin',['only'=>['create','edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('genders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'genre' => 'required|min:3'
        ]);

        if ($validator-> fails()) {
            return response($validator->errors(),422);
        }

        $gender = new Gender;
        $gender->genre =  $request->input('genre');       
        $gender->save();              
    
        return response($gender,201);    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('genders.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
