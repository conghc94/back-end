<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\BaseRepository;

class OrderRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'customer_id',
        'drinkfood_id',
        'note'
    ];

    public function model()
    {
        return Order::class;
    }
}