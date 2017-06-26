<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\BaseRepository;


class CustomerRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name'
    ];

    public function model()
    {
        return Customer::class;
    }
}