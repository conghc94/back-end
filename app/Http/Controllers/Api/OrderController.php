<?php
namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
use App\Repositories\OrderRepository;

class OrderController extends Controller
{
    private $orderRepository;
    
    public function __construct(OrderRepository $orderRepo) {
        $this->orderRepository = $orderRepo;
    }

    public function postOrder(Request $request)
    {
        $input = $request->all();
        $order = $this->orderRepository->create($input);
        return response()->json(['order'=>$order],201);
    }
}
