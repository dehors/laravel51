<?php

namespace laravel51\Http\Controllers;
use Validator;
use DB;
use Crypt;
use laravel51\User;
use Session;
use Redirect;
use Carbon\Carbon;

use Illuminate\Http\Request;
use laravel51\Http\Requests\UserCreateRequest;
use laravel51\Http\Requests\UserUpdateRequest;

use laravel51\Http\Requests;
use laravel51\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class UserController extends Controller
{
    public function __construct(){
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
        $this->middleware('auth');
        $this->middleware('admin',['only'=>['create','edit']]);
    }

    public function find(Route $route){
        $this->user = User::find($route->getParameter('user'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);
        /*$user = User::onlyTrashed($id); solo los eliminados*/
        /*$users = DB::table('users')->select('id','name', 'email', 'password','created_at')->paginate(3);*/
        return view('user.index')->with('users',$users);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users|max:20',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {

            return redirect('user/create')->withErrors($validator)->withInput();
        }
        else
        {

         /*User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
         ]);*/
        
        $user = new User;
        $user->name =  $request->input('name');
        $user->email =  $request->input('email');
        $user->password =  bcrypt($request->input('password'));
        $user->save();

        return redirect('user')->with('message', 'store');

        }

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
        return view('user.edit')->with('user',$this->user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
       
        $this->user->fill($request->all());
        $this->user->save();
        Session::flash('message','update');
        return Redirect::to('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $this->user->delete();     
        return Redirect::to('/user')->with('message','delete');       
    }
}
