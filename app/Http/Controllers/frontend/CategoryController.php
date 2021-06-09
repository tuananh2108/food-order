<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\{category, food};

class CategoryController extends Controller
{
    public function getCategory() {
        $data['categories'] = category::where('active','Yes')->orderBy('id', 'desc')->get();
        return view('frontend.categories', $data);
    }
}
