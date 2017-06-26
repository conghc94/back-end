<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model {
    use SoftDeletes;
    protected $dates = ['delete_at'];

    public $table = 'customers';

    protected $fillable = [
        'name',
    ];
    
    protected $casts = [
        'name' => 'string',
    ];
    
    public static $rule = [
        'name' => 'required'
    ];
}
