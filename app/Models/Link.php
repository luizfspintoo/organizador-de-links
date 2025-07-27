<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //a link belongs to a user
    public function user() {
        return $this->belongsTo(related: User::class);
    }


     /**
     * responsible for moving the link up
     */
    public function moveUp(): void {
        $this->move(-1);
    }

    /**
     * responsible for moving the link down
     */
    public function moveDown(){ 
        $this->move(+1);
    }

    /**
     * responsible for moving the links
     */
    public function move($to) {
        $order = $this->order;
        $newOrder = $order + $to;

        $user = $this->user;

        $swapWith = $user->links()->where("order", "=", $newOrder)->first();

        if (!$swapWith) {
           throw new \Exception("Não é possível mover mais nessa direção.");
        }

        $this->fill(["order" => $newOrder])->save();
        $swapWith->fill(["order" => $order])->save();

    }

}