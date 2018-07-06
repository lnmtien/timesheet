<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(),
            [
                'fullname' => 'required|min:6|max:250',
                'avatar' => 'nullable|image|dimensions:max_width=1280,max_height=720',
                'birthday' => 'nullable|date',
                'phone' => 'nullable|string|max:32'
            ]
        );
        if ($validate->fails()) {
            return response()->json($validate->errors(), 422);
        } else {
            $user = User::find($id);
            $user->fullname = $request->fullname;
            $user->birthday = date('Y-m-d', strtotime($request->birthday));
            $user->phone = $request->phone;
            if (isset($request->avatar)) {
                if ($request->avatar->isValid()) {
                    $filename = date('Ymdhis');
                    $path = Storage::disk('upload')->putFileAs('', $request->avatar, $filename . '.png');
                    $user->avatar = $filename;
                }
            }
            $user->save();
            return response()->json($user, 200);
        }  
    }
    
    public function password(Request $request, $id)
    {
        $validate = Validator::make($request->all(),
            [
                'current_password' => 'required|min:8',
                'password' => 'required|min:8|confirmed|different:current_password',
                'password_confirmation' => 'required_with:password|min:8'
            ]
        );
        if ($validate->fails()) {
            return response()->json($validate->errors(), 422);
        } else {
            $user = User::find($id);
            $password = Hash::make($request->current_password);
            if (!(Hash::check($request->current_password, $user->password))) {
                return response()->json(['current_password' => 'Current Password does not match'], 422);
            } else {
                $user->password = Hash::make($request->password);
                $user->save();
                return response()->json($user, 200);
            }    
        }  
    }
}
