<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\models\category;
use Illuminate\Http\Request;
use App\Http\Requests\{AddCategoryRequest, EditCategoryRequest};

class CategoriesController extends Controller
{
    public function getCategory()
    {
        
        $categories = category::all();
        return view('backend.category.indexCategory')->with('categories', $categories);
    }

    public function getAddCategory()
    {
        return view('backend.category.addCategory');
    }

    public function postAddCategory(AddCategoryRequest $request)
    {
        $category = new category;
        $category->title=$request->title;
        if($request->hasFile('image'))
        {
            $file = $request->image;
            $filename= Str::random(9).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img/category', $filename);
            $category->image=$filename;
        }
        else
        {
            $category->image = 'no-img.jpg';
        }
        $category->featured=$request->featured;
        $category->active=$request->active;
        $category->save();
        return back();
    }

    public function getEditCategory($id)
    {
        $data['category'] = category::find($id);
        return view('backend.category.editCategory', $data);
    }

    public function postEditCategory(EditCategoryRequest $request, $id)
    {
        $category = category::find($id);
        $category->title=$request->title;
        if($request->hasFile('image'))
        {
            $file = $request->image;
            $filename= Str::random(9).'.'.$file->getClientOriginalExtension();
            $file->move('backend/img/category', $filename);
            $category->image=$filename;
        }
        $category->featured=$request->featured;
        $category->active=$request->active;
        $category->save();
        return redirect()->intended('admin/category');
    }

    public function getDeleteCategory($id)
    {
        category::destroy($id);
        return back();
    }
}
