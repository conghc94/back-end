<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model {
    use SoftDeletes;
    protected $dates = ['delete_at'];

    public $table = 'orders';

    protected $fillable = [
        'customer_id',
        'drinkfood_id',
        'note',
    ];
    
    protected $casts = [
        'customer_id' => 'integer',
        'drinkfood_id' => 'integer',
        'note' => 'string',
    ];
    
    public static $rule = [
        'customer_id' => 'required',
        'drinkfood_id' => 'required'
    ];
    
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    
    public function drinkfood()
    {
        return $this->belongsTo('App\Models\Drinkfood', 'drinkfood_id');
    }
}
