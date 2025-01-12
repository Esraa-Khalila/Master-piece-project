<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',

        ]);

        $data = new User();


        $data->name = $request->get('name');
        $data->email = $request->get('email');

        $data->role = $request->get('role');
        $data->password = Hash::make($request->get('password'));
        $data->save();

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'status' => 400]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ex;
            $file->move('uploads/users', $filename);
            $user->image = $filename;
        }

        $user->save();
        $user->update($request->all());

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json($user);
    }
    public function log(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['validation_errors' => $validator->errors(), 'status' => 401]);
        }

        // $user = User::where('email', $request->email)->first();
        // $matchThese = ['role' => 'admin'];
        // if ($user && $matchThese) {
        //     if ($request->password == $user->password) {
        //         $logged_user = ["id" => $user->id, 'name' => $user->name, 'email' => $user->email, 'role' => $user->role];
        //         return response()->json([
        //             'logged_user' => $logged_user,
        //             'status' => 200,
        //             'message' => 'Logged In successfully'
        //         ]);
        //     }
        // }
        //     } else {
        //         return response()->json(['error'=>'Check email and password']);

        //     }
        // } else {
        //     return response()->json(['error'=>'email dose not exist']);

        // }

        // dd($request);
        $user = User::where('email', $request->email)->firstOrFail();
        $matchThese = ['role' => 'admin'];
        // return false;
        // return $user->password;
       
            if (Hash::check($request->password, $user->password)){
                       $logged_user = ["id" => $user->id, 'name' => $user->name, 'email' => $user->email, 'role' => $user->role];
            return response()->json([
                'logged_user' => $logged_user,
                'status' => 200,
                'message' => 'Logged In successfully'
            ]); 
            
        
        } else
            return null;
    }
}
