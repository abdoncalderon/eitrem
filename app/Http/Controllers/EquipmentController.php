<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Brand;
use App\_Model;
use App\Provider;
use App\Office;
use App\EquipmentEmployee;

use App\Http\Requests\SaveComputerRequest;
use App\Http\Requests\EditComputerRequest;

class EquipmentController extends Controller
{

    public function index()
    {
        $select = 'select equipments.id as idequ, equipments.sn as serial, model, type, brand, status 
                   from equipments, models 
                   where equipments.model=models.name and (models.type=? or models.type=?)';

        $computers= DB::select($select,['DESKTOP','LAPTOP']);

        $select = 'select equipments.id as idequ, equipments.sn as serial, model, type, brand, status 
                   from equipments, models 
                   where equipments.model=models.name and (models.type=?)';

        $monitors= DB::select($select,['MONITOR']);

        $select = 'select equipments.id as idequ, equipments.sn as serial, model, type, brand, status 
                   from equipments, models 
                   where equipments.model=models.name and (models.type=?)';

        $printers= DB::select($select,['PRINTER']);

        $select = 'select equipments.id as idequ, equipments.sn as serial, model, type, brand, status 
                   from equipments, models 
                   where equipments.model=models.name and NOT (models.type=? or models.type=? or models.type=? or models.type=?)';

        $others = DB::select($select,['DESKTOP','LAPTOP','MONITOR','PRINTER']);

        return view('equipments.index')
        ->with(compact('computers'))
        ->with(compact('monitors'))
        ->with(compact('printers'))
        ->with(compact('others'));
    }

    public function create()
    {
        $brands = Brand::get();
        $models = _Model::get();
        $providers = Provider::get();
        $offices = Office::get();

        return view('equipments.create')
        ->with(compact('brands'))
        ->with(compact('models'))
        ->with(compact('providers'))
        ->with(compact('offices'));
    }

    public function show($sn)
    {
        $select = 'select equipments.sn as serial, model, type, brand,  provider, status, inventory, storedin 
        from equipments, models
        where equipments.sn=? and equipments.model=models.name ';

        $others = DB::select($select,[$sn]);

        $user = EquipmentEmployee::where('sn',$sn)
        ->join('employees','equipments_x_employee.idcard','=','employees.idcard')
        ->whereNull('equipments_x_employee.return_date')
        ->select('employees.fullname as employee')
        ->first();
       
        $actualUser="";
        
        if (!(empty($user))){
            $actualUser = $user->employee;
        }


        return view('equipments.show')
        ->with(compact('others'))
        ->with('actualUser',$actualUser);
    }

    public function edit($sn)
    {
        $brands = Brand::get();
        $models = _Model::get();
        $providers = Provider::get();
        $offices = Office::get();

        $select = 'select equipments.sn as serial, model, type, brand,  provider, status, inventory, storedin 
                   from equipments, models 
                   where equipments.sn=? and equipments.model=models.name ';

        $others = DB::select($select,[$sn]);

        
        return view('equipments.edit')
        ->with(compact('others'))
        ->with(compact('brands'))
        ->with(compact('models'))
        ->with(compact('providers'))
        ->with(compact('offices'));
    }
}
