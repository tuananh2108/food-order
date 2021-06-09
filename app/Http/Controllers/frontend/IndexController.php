<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\{category, food};

class IndexController extends Controller
{
    public function index()
    {
        $data['categories'] = category::where([['featured','Yes'],['active','Yes'],])->take(3)->get();
        $data['foods'] = food::where('active', 'Yes')->get();
        return view('frontend.home', $data);
    }

    public function getFood()
    {
        $data['foods'] = food::where('active', 'Yes')->get();
        return view('frontend.foods', $data);
    }

    public function getFoodCategory($id) {
        $data['foods'] = food::where('category_id', $id)->orderBy('id', 'desc')->get();
        return view('frontend.category_food', $data);
    }

    public function getCategory() {
        $data['categories'] = category::where('active','Yes')->orderBy('id', 'desc')->get();
        return view('frontend.categories', $data);
    }

    public function getSearch(Request $request)
    {
        $search = $request->search;
        $data['keyword'] = $search;
        $search = str_replace(' ', '%', $search);
        $data['foods'] = food::where('title', 'like', '%'.$search.'%')->get();
        return view('frontend.search', $data);
    }
}
