<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sector;
use App\Http\Requests\SaveSectorRequest;

class SectorController extends Controller
{
    public function index()
    {
        $sectors = Sector::get();
        return view('sectors.index', compact('sectors'));
    }

    public function create()
    {
        return view('sectors.create');
    }

    public function store(SaveSectorRequest $request )
    {
        Sector::create($request ->validated());
        
        return redirect()->route('sectors.index');
    }

    public function show(Sector $sector)
    {
        return view('sectors.show',[
            'sector'=>$sector
            ]);
    }

    public function edit(Sector $sector)
    {
        return view('sectors.edit',[
            'sector'=>$sector
            ]);
    }
    
    public function update(Sector $sector, SaveSectorRequest $request)
    {
        $sector->update($request->validated());
        
        return redirect()->route('sectors.index');
    }

    public function delete(Sector $sector)
    {
        return view('sectors.delete',[
            'sector'=>$sector
            ]);
    }                             

    public function destroy(Sector $sector)
    {
        $sector->delete();

        return redirect()->route('sectors.index');
    }
}
