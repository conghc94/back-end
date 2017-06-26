<?php

namespace App\Models;
//use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drinkfood extends Model {
    use SoftDeletes;
    protected $dates = ['delete_at'];

    public $table = 'drinks_foods';

    protected $fillable = [
        'name',
        'description',
        'price'
    ];
    
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'price' => 'string'
    ];
    
    public static $rule = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required'
    ];
}
