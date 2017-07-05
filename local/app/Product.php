<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $validation = [
        'rules' => [
            'name'              => 'required|unique:posts|max:255',
            'user_id'           => 'required',
            'producer_id'       => 'required',
            'price'             => 'required',
            'short_desciption'  => 'required',
            'description'       => 'required',
            'is_active'         => 'required',
            'sell_amount'       => 'required',
            'sell_qty'          => 'required',
            'ordered_count'     => 'required',
            'is_special'        => 'required',
            'quantity'          => 'required',
            'created'           => 'required',
            'updated'           => 'required'
        ],
        'messages' => [

        ],
    ];
}
