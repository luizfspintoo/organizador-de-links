<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeLinkRequest;
use App\Models\Link;
use App\Models\User;

class LinkController extends Controller
{
    public function store(MakeLinkRequest $request)
    {
        $data = $request->validated();

        if ($file = $request->file("image")) {
            $data['image'] = $file->store("images");
        }

        Link::create($data);

        return to_route("dashboard")->with(["success" => "Link criado com sucesso"]);
    }


    public function show(Link $link)
    {
        /**
         * @var User $user
         */

        $user = auth()->user();

        //route model binding, Laravel já injeta automaticamente o modelo Link correspondente ao {link} na rota
        return view("links.show", [
            "user" => $user,
            "link" => $link
        ]);
    }

    public function update(MakeLinkRequest $request, Link $link)
    {
        $data = $request->validated();

        if ($file =  $request->image) {
            $data["image"] = $file->store("images");
        }

        $link->update($data);
        return to_route("dashboard")->with(["success" => "Link atualizado com sucesso"]);
    }

    public function destroy(Link $link)
    {
        $link->delete();
        return to_route("dashboard")->with(["success" => "Link deletado com sucesso"]);
    }
}
