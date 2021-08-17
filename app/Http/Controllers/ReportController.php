<?php

namespace App\Http\Controllers;

use App\Employee;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function showRDR(Employee $employee)
    {
        $idcard = $employee->idcard;
        
        $select = 'select equipments_x_employee.id as idexe, equipments_x_employee.sn as serial, model, type, brand, delivery_date, delivery_user, return_date, return_user 
                   from equipments_x_employee, equipments, models 
                   where equipments_x_employee.sn=equipments.sn and equipments.model=models.name and equipments_x_employee.idcard=?';

        $equipmentEmployees = DB::select($select,[$idcard]);
        
        return view('reports.rdr', compact('equipmentEmployees'))
        ->with('employee',$employee);
    }

    public function printRDR(Employee $employee)
    {
        $idcard = $employee->idcard;
        
        $select = 'select equipments_x_employee.id as idexe, equipments_x_employee.sn as serial, model, type, brand, delivery_date, delivery_user, return_date, return_user 
                   from equipments_x_employee, equipments, models 
                   where equipments_x_employee.sn=equipments.sn and equipments.model=models.name and equipments_x_employee.idcard=?';

        $equipmentEmployees = DB::select($select,[$idcard]);

        return view('reports.previews.rdr', compact('equipmentEmployees'))
        ->with('employee',$employee);
    }
}
