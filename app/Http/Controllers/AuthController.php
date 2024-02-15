<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
class AuthController extends Controller
{


    public function index()
    {

        $user = Auth::user();

        // Authentication passed, redirect to employer dashboard or desired page
        return view('admin.dashboard' ,compact('user'));
    }
    // login
    public function login(Request $request)

    {


        $credentials = $request->only('username', 'password');

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();

            if($user->isAdmin)
            {
                $role = 'admin';

                return response()->json([
                    'status' => true,
                    'message' => 'Logged in successfully.',
                    'currentusername' => $user->username,
                    'role' => $role
                ], 200);
            }
            else
            {
                $role = 'user';

                return response()->json([
                    'status' => false,
                    'message' => 'Access denied. Not authorized as admin.',
                    'role' => $role
                ], 403);
            }
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'Invalid Credentials.'
            ], 401);
        }
    }

    // logout
    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();

            return response()->json([
                'status' => true,
                'message' => 'Logging Out.'
            ], 200);
        }
        else
        {
            return response()->json([
                'status' => false,
                'message' => 'Login In again.'
            ], 400);
        }
    }

    public function showChangePasswordForm()
    {
        return view('admin.changepassword');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|string|min:8',
        ]);

        $credentials = [
            'username' => Auth::user()->username, // Assuming your username field is 'username'
            'password' => $request->old_password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user->password = Hash::make($request->new_password);
            $user->save();

            return redirect()->route('change.password.form')->with('success', 'Password changed successfully.');
        } else {
            return redirect()->route('change.password.form')->with('error', 'The provided old password is incorrect.');
        }
    }
}
