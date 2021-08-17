<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Functi0n;
use App\Http\Requests\SaveFunctionRequest;

class FunctionController extends Controller
{
    public function index()
    {
        $functions = Functi0n::get();
        return view('functi0ns.index', compact('functions'));
    }

    public function create()
    {
        return view('functi0ns.create');
    }

    public function store(SaveFunctionRequest $request )
    {
        Function_::create($request ->validated());
        
        return redirect()->route('functi0ns.index');
    }

    public function show(Functi0n $function)
    {
        return view('functi0ns.show',[
            'function'=>$function
            ]);
    }

    public function edit(Functi0n  $function)
    {
        return view('functi0ns.edit',[
            'function'=>$function
            ]);
    }
    
    public function update(Functi0n $function, SaveFunctionRequest $request)
    {
        $function->update($request->validated());
        
        return redirect()->route('functi0ns.index');
    }

    public function delete(Functi0n  $function)
    {
        return view('functi0ns.delete',[
            'function'=>$function
            ]);
    }                             

    public function destroy(Functi0n $function)
    {
        $function->delete();

        return redirect()->route('functi0ns.index');
    }
}
