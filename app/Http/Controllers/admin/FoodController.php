<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\models\{category, food, order};
use App\Http\Requests\AddFoodRequest;
use DB;

class FoodController extends Controller
{
    public function getFood()
    {
        $data['qty_order'] = count(order::all());
        $data['foods'] = food::all();
        return view('admin.food.index', $data);
    }

    public function getAddFood()
    {
        $data['qty_order'] = count(order::all());
        $data['catelist'] = category::all();
        return view('admin.food.add', $data);
    }

    public function postAddFood(AddFoodRequest $request)
    {
        $food = new food;
        $food->title = $request->title;
        $food->description = $request->description;
        $food->price = $request->price;
        if($request->hasFile('image'))
        {
            $file = $request->image;
            $filename = Str::random(9).'.'.$file->getClientOriginalExtension();
            $file->move('admin/img/food', $filename);
            $food->image = $filename;
        }
        else
        {
            $food->image = 'no-img.jpg';
        }
        $food->category_id = $request->category;
        $food->save();
        return redirect()->back()->with('success', 'Successfully added new!');
    }

    public function getEditFood($id)
    {
        $data['qty_order'] = count(order::all());
        $data['food'] = food::find($id);
        $data['categories'] = category::all();
        return view('admin.food.edit', $data);
    }

    public function postEditFood(Request $request, $id)
    {
        $food = food::find($id);
        $food->title = $request->title;
        $food->description = $request->description;
        $food->price = $request->price;
        if($request->hasFile('image'))
        {
            $file = $request->image;
            $filename = Str::random(9).'.'.$file->getClientOriginalExtension();
            $file->move('admin/img/food', $filename);
            $food->image = $filename;
        }
        $food->category_id = $request->category;
        $food->status = $request->status;
        $food->save();

        return redirect('admin/food')->with('success', 'Update successful!');
    }

    public function getDeleteFood($id)
    {
        food::destroy($id);
        return back()->with('success', 'Delete successfully!');
    }
}
