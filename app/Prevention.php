<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prevention extends Model
{
    public function showPrevent() {
        $prevention = Prevention::getAll();
        $dd('prevention');
        //return view('prevention', ['prevention' => $prevention]);
    }

    
}
