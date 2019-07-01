<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // server validation
        $this->validate($request, [

                'name' =>'required|string|max:191',
                'email' =>'required|string|email|unique:users',
                'password' =>'required|min:4'
        ]);

        // store data from UserComponents in the "User" fillable MODEL
        return User::create([

            'name'=> $request['name'],
            'email'=> $request['email'],
            'type'=> $request['type'],
            'bio'=> $request['bio'],
            'photo'=> $request['photo'],
            'password'=> Hash::make($request['password'])

        ]);
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

    public function profile()
    {
        //
        
        return auth('api')->user();

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
            $user = User::findOrFail($id);

         // server validation
            $this->validate($request, [

            'name' =>'required|string|max:191',
            'email' =>'required|string|email|unique:users,email,'.$user->id,
            'password' =>'sometimes|min:4'

            ]);

            $user->update($request->all());

            return ['message'=>'user info updated'];


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
        $user = User::findOrFail($id);

        $user->delete();

        return ['message'=>'user deleted'];
    }
}
