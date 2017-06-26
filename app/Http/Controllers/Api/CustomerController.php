<?php
namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use \App\Http\Controllers\Controller;
class CustomerController extends Controller
{
    public function postCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->save();
        return response()->json(['customer' => $customer], 201);
    }
    
    public function getCustomers()
    {
        $customers = Customer::all();
        $response = [
          'customers' => $customers
        ];
        return response()->json($response,200);
    }
    
    public function putCustomer(Request $request, $id)
    {
        $customer = Customer::find($id);
        if(!$customer){
            return response()->json(['message' => 'Customer not found'], 404);
        }
        $customer->name = $request->input('name');
        $customer->save();
        return response()->json(['customer' => $customer], 200);
    }
    
    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json(['message' => 'Customer delete'], 200);
    }
}
