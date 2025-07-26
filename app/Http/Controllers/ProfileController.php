<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeProfileRequest;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        /**
         * @var User $user
         */
        $user = auth()->user();
        return view("profile.index", [
            "user" => $user
        ]);
    }

    public function update(MakeProfileRequest $request)
    {
        $data = $request->validated();

        if ($file = $request->file("image")) {
            $data['image'] = $file->store("images_profile");
        }


        /**
         * @var User $user
         */
        $user = auth()->user();
        $user->update($data);

        return back()->with(["success" => "Perfil atualizado com sucesso"]);
    }
}
