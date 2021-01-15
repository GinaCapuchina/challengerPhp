<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = [
        'nombre', 'categoria', 'precio',
    ];

    //$app-> user
    //App N - 1 User

    public function user(){
        return $this-> belongsTo(User::class);
    }

}
