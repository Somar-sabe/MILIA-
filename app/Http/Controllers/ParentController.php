<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $validatedData = $request->validate([
        'title' => 'required',
        'parent_name' => 'required',
        'date_of_birth' => 'required',
        'number_of_children' => 'required|integer',
        'children.*.name' => 'required',
    ]);

    $parent = Parent::create($validatedData);

    foreach ($validatedData['children'] as $childData) {
        $childData['parent_id'] = $parent->id;
        Child::create($childData);
    }

    return redirect()->back();
}//
    

    public function update(Request $request, string $id)
    {
        //
    }
    public function parentsWithChildrenAge5()
{
    $parents = Parent::whereHas('children', function ($query) {
        $query->where('age', 5);
    })->get();

    return view('parents.index', compact('parents'));
}
    public function destroy(string $id)
    {
        //
    }
}
