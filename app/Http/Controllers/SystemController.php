<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\System;
use App\Http\Requests\SaveSystemRequest;

class SystemController extends Controller
{
    public function index()
    {
        $systems = System::get();
        return view('systems.index', compact('systems'));
    }

    public function create()
    {
        return view('systems.create');
    }

    public function store(SaveSystemRequest $request )
    {
        System::create($request ->validated());
        
        return redirect()->route('systems.index');
    }

    public function show(System $system)
    {
        return view('systems.show',[
            'system'=>$system
            ]);
    }

    public function edit(System $system)
    {
        return view('systems.edit',[
            'system'=>$system
            ]);
    }
    
    public function update(System $system, SaveSystemRequest $request)
    {
        $system->update($request->validated());
        
        return redirect()->route('systems.index');
    }

    public function delete(System $system)
    {
        return view('systems.delete',[
            'system'=>$system
            ]);
    }                             

    public function destroy(System $system)
    {
        $system->delete();

        return redirect()->route('systems.index');
    }
}
