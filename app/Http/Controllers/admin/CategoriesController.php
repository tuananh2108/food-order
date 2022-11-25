<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\models\{category, order};
use Illuminate\Http\Request;
use App\Http\Requests\{AddCategoryRequest, EditCategoryRequest};
use App\Services\PermissionServices;

class CategoriesController extends Controller
{
    public function getCategory()
    {
        $data['qty_order'] = count(order::all());
        $data['categories'] = category::all();
        return view('admin.category.index', $data);
    }

    public function getAddCategory()
    {
        $data['qty_order'] = count(order::all());
        return view('admin.category.add', $data);
    }

    public function postAddCategory(AddCategoryRequest $request)
    {
        $category = new category;
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->with('success', 'Successfully added new!');
    }

    public function getEditCategory($id)
    {
        $data['qty_order'] = count(order::all());
        $data['category'] = category::find($id);
        return view('admin.category.edit', $data);
    }

    public function postEditCategory(EditCategoryRequest $request, $id)
    {
        $category = category::find($id);
        $category->title = $request->title;
        $category->status = $request->status;
        $category->save();
        if(!$category->save())
            return redirect()->back()->with('error', 'Category name has been duplicated!');
        else
            return redirect()->intended('admin/category')->with('success', 'Update successful!');
    }

    public function getDeleteCategory($id)
    {
        category::destroy($id);
        return back()->with('success', 'Delete successfully!');
    }
}
