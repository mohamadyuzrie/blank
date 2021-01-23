<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB, DataTables, Auth;
use App\Models\User;

class APIExampleController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request['email'])->where('password_test', $request['password'])->first();
        if (isset($user)) {
            $user->update(['token' => bcrypt($user->password_test)]);
            return response()->json($user);
        }

        return response()->json(['fail' => 'ok']);
    }

    public function checkToken(Request $request)
    {
        $user = User::where('token', $request['token'])->first();

        return response()->json(['token_valid' => isset($user) ]);
    }

    public function logout(Request $request)
    {
        $user = User::where('token', $request['token'])->first();
        $user->update(['token' => null]);

        return response()->json(['message' => 'Logout successful' ]);
    }

    public function getItems(Request $request)
    {
        $authenticated_user = User::findByToken($request['token']);

        if ($authenticated_user) {
            $items = Item::all();
            return response()->json($items);
        } else {
            return response()->json(['error_message' => 'token invalid']);
        }
    }
}
