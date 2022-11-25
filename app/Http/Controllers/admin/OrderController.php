<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\{order, food};
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getOrder()
    {
        $data['qty_order'] = count(order::all());
        $data['orders'] = DB::table('orders')
                            ->orderBy('orders.id', 'desc')
                            ->get();
        
        return view('admin.order.index', $data);
    }

    public function getUpdateOrder($id)
    {
        $data['qty_order'] = count(order::all());
        $data['order'] = order::find($id);
        $data['foods'] = DB::table('order_food')
                            ->join('foods', 'order_food.food_id', '=', 'foods.id')
                            ->select('foods.title', 'foods.price', 'order_food.quantity')
                            ->where('order_food.order_id', $id)
                            ->get();
        return view('admin.order.edit', $data);
    }

    public function postUpdateOrder(Request $request, $id) 
    {
        $order = order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect('admin/order')->with('success', 'Update successful!');
    }

    public function getDeleteOrder($id)
    {
        order::destroy($id);
        return back()->with('success', 'Delete successfully!');
    }
}
