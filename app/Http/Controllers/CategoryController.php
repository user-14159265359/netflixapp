<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
    }
    public function show($id)
    {
        $category = new Category();
        $category = Category::findOrFail($id);
        return response()->json($category);
    }
    public function destroy($id)
    {
        $category = new Category();
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(['mesage' => 'category was deleted']);
    }
    public function update(UpdateConfigRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->update();
        return response()->json(['message' => 'user was updated']);
    }
}
