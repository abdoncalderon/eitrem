<?php

namespace App\Http\Controllers;

use App\Position;
use App\Http\Requests\SavePositionRequest;

class PositionController extends Controller
{
    public function index()
    {
        $positions = Position::get();
        return view('positions.index', compact('positions'));
    }

    public function create()
    {
        return view('positions.create');
    }

    public function store(SavePositionRequest $request )
    {
        Position::create($request ->validated());
        
        return redirect()->route('positions.index');
    }

    public function show(Position $position)
    {
        return view('positions.show',[
            'position'=>$position
            ]);
    }

    public function edit(Position $position)
    {
        return view('positions.edit',[
            'position'=>$position
            ]);
    }
    
    public function update(Position $position, SavePositionRequest $request)
    {
        $position->update($request->validated());
        
        return redirect()->route('positions.index');
    }

    public function delete(Position $position)
    {
        return view('positions.delete',[
            'position'=>$position
            ]);
    }                             

    public function destroy(Position $position)
    {
        $position->delete();

        return redirect()->route('positions.index');
    }
}
