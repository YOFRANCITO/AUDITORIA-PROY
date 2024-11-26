<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAll () {
        return response()->json([
            'users' => User::all()
        ]);
    }

    public function storeAjax (StoreUserRequest $request) {
        $user = User::create($request->validated());
        return response()->json($user, 201);
    }

    public function storeEmailAjax (Request $request) {
        return response()->json(User::storeEmail($request->email));
    }
}
