<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
          *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Form');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                 
       $validated = $request->validate([
        'name' => 'required',
        'title' => 'required',
    ]);

        $Category= new Category;
        $Category->name = $request->name;
        $Category->title= $request->title;
        $Category->save();
        return redirect('All-Categories')->with('success','Caegories Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $category = Category::all();
        return view('View',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category,$id)
    {
        $category = Category::findOrFail($id);
        return view('Update')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category , $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->title = $request->input('title');
        $category->update();
        return redirect('All-Categories')->with('success','Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('All-Categories')->with('success','Caegories Deleted');
    }

     public function login()
    {
        
        return view('login');

    }
}
