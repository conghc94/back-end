<?php

namespace App\Repositories;

use App\Models\Drinkfood;
use App\Repositories\BaseRepository;

class DrinkfoodRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'description',
        'price'
    ];

    public function model()
    {
        return Drinkfood::class;
    }
}