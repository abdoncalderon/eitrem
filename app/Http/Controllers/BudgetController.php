<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\SaveBudgetRequest;
use App\Http\Requests\EditBudgetRequest;

use App\Budget;
use App\Account;

use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function resume()
    {
        $select = 'select distinct account, year, sum(value) as yearvalue from Budgets group by account, year order by year, account ASC;';
        $budgets = DB::select($select);
        return view('budgets.resume', compact('budgets'));
    }


    public function index($account, $year)
    {
        $select = 'select id, year, account, month_, value from Budgets where account=? and year=?;';
        $budgets = DB::select($select, [$account,$year]);
        
        return view('budgets.index', [
            'account'=>$account,
            'year'=>$year])
        ->with(compact('budgets'));
    }
    
    /* public function create()
    {
        $months = Array(1,2,3,4,5,6,7,8,9,10,11,12);
        for($i=2010;$i<=2099;$i++){
            $years[$i-2010]=$i;
        }
        $accounts = Account::get();
        return view('budgets.create')
        ->with(compact('accounts'))
        ->with(compact('months'))
        ->with(compact('years'));
    } */

    public function create($account)
    {
        $months = Array(1,2,3,4,5,6,7,8,9,10,11,12);
        for($i=2010;$i<=2099;$i++){
            $years[$i-2010]=$i;
        }
        return view('budgets.create',[
            'account'=>$account])
        ->with(compact('years'))
        ->with(compact('months'));
    }

    public function store(SaveBudgetRequest $request )
    {
        Budget::create($request ->validated());
        
        return redirect()->route('budgets.resume');
    }

    public function show($id)
    {
        $budget=Budget::find($id);
        return view('budgets.show', compact('budget'));
    }

    public function edit($id)
    {
        $months = Array(1,2,3,4,5,6,7,8,9,10,11,12);
        for($i=2010;$i<=2099;$i++)
        {
            $years[$i-2010]=$i;
        }
        $accounts = Account::get();

        $budget=Budget::find($id);
        return view('budgets.edit', [
            'budget'=>$budget])
        ->with(compact('accounts'))
        ->with(compact('months'))
        ->with(compact('years'));
    }
    
    public function update(Budget $budget, EditBudgetRequest $request)
    {
        $budget->update($request->validated());
        
        return redirect()->route('budgets.resume');
    }
    

    public function destroy(Budget $budget)
    {
        $budget->delete();

        return redirect()->route('budgets.resume');
    }
}
