<?php

namespace App\Http\Controllers;

use App\_Model;
use App\Type;
use App\Brand;
use App\Http\Requests\SaveModelRequest;
use App\Http\Requests\EditModelRequest;

class ModelController extends Controller
{
    public function index()
    {
        $models = _Model::get();
        return view('models.index', compact('models'));
    }

    public function create()
    {
        $types = Type::get();
        $brands = Brand::get();
        return view('models.create')
        ->with(compact('types'))
        ->with(compact('brands'));
    }

    public function store(SaveModelRequest $request )
    {
        _Model::create($request ->validated());
        
        return redirect()->route('models.index');
    }

    public function show(_Model $model)
    {
        return view('models.show',[
            'model'=>$model
            ]);
    }

    public function edit(_Model $model)
    {
        $types = Type::get();
        $brands = Brand::get();
               
        return view('models.edit',[
            'model'=>$model
            ])
        ->with(compact('types'))
        ->with(compact('brands'));
    }
    
    public function update(_Model $model, EditModelRequest $request)
    {
        $model->update($request->validated());
        
        return redirect()->route('models.index');
    }

    public function delete(_Model $model)
    {
        return view('models.delete',[
            'model'=>$model
            ]);
    }                             

    public function destroy(_Model $model)
    {
        $model->delete();

        return redirect()->route('models.index');
    }
}
