<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(10);

        return view('users/users', ['users' => $users]);
    }

    public function store(Request $req)
    {
        $status = [
            'error' => false,
            'message' => ''
        ];
        $keys = $req->all();

        $username = $keys['username'];
        $email = $keys['email'];
        $password = $keys['password'];
        $confirmPassword = $keys['confirmPassword'];
        $isAdmin = $keys['isAdmin'];

        $userCheck = User::where('email', $email)->first();

        if($userCheck)
        {
            $status['error'] = true;
            $status['message'] = "This e-mail registered before";
        }

        if(!$username)
        {
            $status['error'] = true;
            $status['message'] = "The username can't be blank";
        }

        if(!$email)
        {
            $status['error'] = true;
            $status['message'] = "The e-mail can't be blank";
        }

        if($password !== $confirmPassword && !(count($password) >=6 && count($confirmPassword) >= 6))
        {
            $status['error'] = true;
            $status['message'] = "Passwords must be same and minimum lenght must be 6 characters.";
        }

        if(!$status['error'])
        {
            $user = User::create([
                'name' => $username,
                'email' => $email,
                'password' => Hash::make($password),
                'is_admin' => $isAdmin
            ]);

            if($user) {
                $status['message'] = 'User added successfully!';

            }
        }

        return response()->json($status);
    }
}
