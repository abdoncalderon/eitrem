<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Type;
use App\Http\Requests\SaveTypeRequest;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::get();
        return view('types.index', compact('types'));
    }

    public function create()
    {
        return view('types.create');
    }

    public function store(SaveTypeRequest $request )
    {
        Type::create($request ->validated());
        
        return redirect()->route('types.index');
    }

    public function show(Type $type)
    {
        return view('types.show',[
            'type'=>$type
            ]);
    }

    public function edit(Type $type)
    {
        return view('types.edit',[
            'type'=>$type
            ]);
    }
    
    public function update(Type $type, SaveTypeRequest $request)
    {
        $type->update($request->validated());
        
        return redirect()->route('types.index');
    }

    public function delete(Type $type)
    {
        return view('types.delete',[
            'type'=>$type
            ]);
    }                             

    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('types.index');
    }
}
