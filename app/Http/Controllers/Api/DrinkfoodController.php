<?php
namespace App\Http\Controllers\Api;

use App\Models\Drinkfood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\DrinkfoodRepository;

class DrinkfoodController extends Controller
{
    private $drinkfoodRepository;
    
    public function __construct(DrinkfoodRepository $drinkfoodRepo) {
        $this->drinkfoodRepository = $drinkfoodRepo;
    }
    
    public function getDrinksfoods()
    {
        $drinksfoods = $this->drinkfoodRepository->all();
        $response = [
            'drinksfoods' => $drinksfoods
        ];
        return response()->json($response,200);
    }
    
    public function postDrinkfood(Request $request)
    {
        $input = $request->all();
        $drinkfood = $this->drinkfoodRepository->create($input);
        return response()->json(['drinkfood'=>$drinkfood],201);
    }
    
    public function putDrinkfood(Request $request, $id)
    {
        $drinkfood = $this->drinkfoodRepository->findWithoutFail($id);
        if(empty($drinkfood))
        {
            return response()->json(['message' => 'Drink, food not found'], 404);
        }
        $drinkfood = $this->drinkfoodRepository->update($request->all(), $id);
        return response()->json(['drinkfood' => $drinkfood],200);
    }
    
    public function deleteDrinkfood($id)
    {
        $drinkfood = $this->drinkfoodRepository->findWithoutFail($id);
        if(empty($drinkfood))
        {
            return response()->json(['message','Drink, food not found'], 404);
        }
        $this->drinkfoodRepository->delete($id);
        return response()->json(['message' => 'Drink, food deleted'],200);
    }
}
