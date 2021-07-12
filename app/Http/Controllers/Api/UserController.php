<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::get();
        return response($users, 200);
        // $users = User::get();
        //dd($users);
        // return ($users);
        // return view('users.index', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (User::where('id', $id)->exists()) {
            // $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            $user = User::where('id', $id)->get();
            return response($user, 200);
          } else {
            return response()->json([
              "message" => "Book not found"
            ], 404);
          }

        // if(User::where('id','$id')->exists()){
        //     // $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        //     $user = User::where('id', $id)->get();
        //     return response($user,200);
        // }else{
        //     return response()->json([
        //         "message" => "Usuario no encontrado"
        //     ], 404);
        // }
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
