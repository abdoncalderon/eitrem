<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Os;
use App\Http\Requests\SaveOsRequest;

class OsController extends Controller
{
    public function index()
    {
        $oss = Os::get();
        return view('oss.index', compact('oss'));
    }

    public function create()
    {
        return view('oss.create');
    }

    public function store(SaveOsRequest $request )
    {
        Os::create($request ->validated());
        
        return redirect()->route('oss.index');
    }

    public function show(Os $os)
    {
        return view('oss.show',[
            'os'=>$os
            ]);
    }

    public function edit(Os $os)
    {
        return view('oss.edit',[
            'os'=>$os
            ]);
    }
    
    public function update(Os $os, SaveOsRequest $request)
    {
        $os->update($request->validated());
        
        return redirect()->route('oss.index');
    }

    public function delete(Os $os)
    {
        return view('oss.delete',[
            'os'=>$os
            ]);
    }                             

    public function destroy(Os $os)
    {
        $os->delete();

        return redirect()->route('oss.index');
    }
}
