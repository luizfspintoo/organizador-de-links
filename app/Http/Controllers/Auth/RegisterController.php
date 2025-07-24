<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeRegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function register(MakeRegisterRequest $request)
    {
        if ($request->tryToRegister()) {
            return to_route("login");
        }

        return back()->with(["message" => "Houve um erro ao tentar registrar usuario"]);
    }
}
