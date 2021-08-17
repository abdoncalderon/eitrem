<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SaveBrandRequest;

use App\Brand;
use App\_Model;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::get();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(SaveBrandRequest $request )
    {
        Brand::create($request ->validated());
        
        return redirect()->route('brands.index');
    }

    public function show(Brand $brand)
    {
        return view('brands.show',[
            'brand'=>$brand
            ]);
    }

    public function edit(Brand $brand)
    {
        return view('brands.edit',[
            'brand'=>$brand
            ]);
    }
    
    public function update(Brand $brand, SaveBrandRequest $request)
    {
        $brand->update($request->validated());
        
        return redirect()->route('brands.index');
    }

    public function delete(Brand $brand)
    {
        return view('brands.delete',[
            'brand'=>$brand
            ]);
    }                             

    public function destroy(Brand $brand)
    {
        $brand->delete();

        return redirect()->route('brands.index');
    }

    public function getModelsComputer(Request $request, $brand)
    {
        if($request->ajax())
        {
            $models = _Model::where('brand','=',$brand)
            ->where( function($query){
                $query->orWhere('type','=','DESKTOP')
                      ->orWhere('type','=','LAPTOP');
            })->get();

            return response()->json($models);
        }
    }

    public function getModelsMonitor(Request $request, $brand)
    {
        if($request->ajax())
        {
            $models = _Model::where('brand','=',$brand)
            ->where('type','=','MONITOR')
            ->get();

            return response()->json($models);
        }
    }

    public function getModelsPrinter(Request $request, $brand)
    {
        if($request->ajax())
        {
            $models = _Model::where('brand','=',$brand)
            ->where('type','=','PRINTER')
            ->get();

            return response()->json($models);
        }
    }

    public function getModelsOther(Request $request, $brand)
    {
        if($request->ajax())
        {
            $models = _Model::where('brand','=',$brand)
            ->where('type','<>','DESKTOP')
            ->where('type','<>','LAPTOP')
            ->where('type','<>','MONITOR')
            ->where('type','<>','PRINTER')
            ->get();

            return response()->json($models);
        }
    }
}
