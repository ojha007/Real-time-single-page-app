<?php

namespace App\Http\Controllers\CustomController;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{

    public function index()
    {

        return  CategoryResource::collection(Category::latest()->get());
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
         Category::create($request->all);
         return \response("Created",Response::HTTP_CREATED);
    }


    public function show(Category $category)
    {
        return $category;
    }


    public function edit(Category $category)
    {
        //
    }


    public function update(Request $request, Category $category)
    {
        $category->update([
           'title'=>$request->title,
           'slug'=>str_slug($request->title),
        ]);
        return \response("Updated",Response::HTTP_CREATED);
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
