<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
  
    function index()
    {
        $categories = Category::with('children')->whereNull('parent_id')->get();

        return view('index')->with([
            'categories'  => $categories
        ]);
    }
    function show()
    {

        $records = Category::all();
        return view('show', ['categories' => $records]);
    }
    function store(Request $request)
    {
        $validatedData = $this->validate($request, [
            'name'      => 'required|min:3|max:255|string',
            'parent_id' => 'sometimes|nullable|numeric'
        ]);

        Category::create($validatedData);
        return redirect('cat_show');
    }

    function edit($id)
    {
        $data = Category::find($id);
        $category_data = Category::all();

        return view('edit', ['data' => $data, 'categories' => $category_data]);
    }
    function update(Request $request, Category $category)
    {
        $data = Category::find($request->id);
        $request->validate([
            'name'  => 'required|min:3|max:255|string'
        ]);
        $data->name = $request->name;
        $data->save();
        return redirect('cat_show');
    }

    function destroy(Category $category, $id)
    {

        $data = Category::find($id);
        $data->delete();

        return redirect('cat_show');
    }
}
