<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        // es para lkistar todas las categorias en la base de datos
        $categories= Category::orderBy('id','DESC')->paginate(15);
        return view('admin.categories.index', compact('categories'));
    }


    public function create()
    {
        //
    }



    public function store(Request $request)
    {
        //
    }


    public function show(Category $category)
    {
        //
    }


    public function edit(Category $category)
    {
        //
    }


    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}
