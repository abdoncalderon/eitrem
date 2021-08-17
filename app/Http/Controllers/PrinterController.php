<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Printer;
use App\Brand;
use App\_Model;
use App\Provider;
use App\Office;
use App\Equipment;

use App\Http\Requests\SavePrinterRequest;
use App\Http\Requests\EditPrinterRequest;

use App\Http\Requests\SaveEquipmentRequest;
use App\Http\Requests\EditEquipmentRequest;

class PrinterController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        $brands = Brand::get();
        $models = _Model::get();
        $providers = Provider::get();
        $offices = Office::get();

        return view('printers.create')
        ->with(compact('brands'))
        ->with(compact('models'))
        ->with(compact('providers'))
        ->with(compact('offices'));
    }
    
    public function store(SaveEquipmentRequest $requestEquipment, SavePrinterRequest $requestPrinter )
    {
        Equipment::create($requestEquipment ->validated());
        Printer::create($requestPrinter ->validated());
        
        return redirect()->route('equipments.index');
    }

    public function show($sn)
    {
        $select = 'select equipments.sn as serial, model, type, brand,  provider, status, inventory, storedin, ip, office, black, color, usb, ethernet, wifi    
                   from equipments, models, printers 
                   where equipments.sn=? and equipments.sn=printers.sn and equipments.model=models.name ';

        $printers = DB::select($select,[$sn]);

        return view('printers.show')
        ->with(compact('printers'));
        
    }

    public function edit($sn)
    {
        $brands = Brand::get();
        $models = _Model::get();
        $providers = Provider::get();
        $offices = Office::get();

        $select = 'select equipments.sn as serial, model, type, brand,  provider, status, inventory, storedin, ip, office, black, color, usb, ethernet, wifi  
                   from equipments, models, printers 
                   where equipments.sn=? and equipments.sn=printers.sn and equipments.model=models.name ';

        $printers = DB::select($select,[$sn]);

        return view('printers.edit')
        ->with(compact('printers'))
        ->with(compact('brands'))
        ->with(compact('models'))
        ->with(compact('providers'))
        ->with(compact('offices'));
    }

    
    public function update($sn, EditPrinterRequest $requestPrinter, EditEquipmentRequest $requestEquipment)
    {
        $equipment = Equipment::where('sn',$sn)->first();
        $printer = Printer::where('sn',$sn)->first();
        $equipment->update($requestEquipment->validated());
        $printer->update($requestPrinter->validated());
        
        return redirect()->route('equipments.index');
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
