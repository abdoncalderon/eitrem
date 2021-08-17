<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('types','TypeController');
Route::get('/types/delete/{type}','TypeController@delete')->name('types.delete');

Route::resource('brands','BrandController');
Route::get('/brands/delete/{brand}','BrandController@delete')->name('brands.delete');

Route::get('/getModelsComputer/{brand}','BrandController@getModelsComputer');
Route::get('/getModelsMonitor/{brand}','BrandController@getModelsMonitor');
Route::get('/getModelsPrinter/{brand}','BrandController@getModelsPrinter');
Route::get('/getModelsOther/{brand}','BrandController@getModelsOther');

Route::resource('regions','RegionController');
Route::get('/regions/delete/{region}','RegionController@delete')->name('regions.delete');

Route::resource('positions','PositionController');
Route::get('/positions/delete/{position}','PositionController@delete')->name('positions.delete');

Route::resource('sectors','SectorController');
Route::get('/sectors/delete/{sector}','SectorController@delete')->name('sectors.delete');

Route::resource('oss','OsController');
Route::get('/oss/delete/{os}','OsController@delete')->name('oss.delete');

Route::resource('systems','SystemController');
Route::get('/systems/delete/{system}','SystemController@delete')->name('systems.delete');

Route::resource('models','ModelController');
Route::get('/models/delete/{model}','ModelController@delete')->name('models.delete');

Route::resource('offices','OfficeController');
Route::get('/offices/delete/{office}','OfficeController@delete')->name('offices.delete');

Route::resource('cellularPlans','CellularPlanController');
Route::get('/cellularPlans/delete/{cellularPlan}','CellularPlanController@delete')->name('cellularPlans.delete');

Route::resource('employees','EmployeeController');
Route::get('/employees/delete/{employee}','EmployeeController@delete')->name('employees.delete');

Route::resource('roles','RoleController');
Route::get('/roles/delete/{role}','RoleController@delete')->name('roles.delete');

Route::resource('users','UserController');

Route::resource('providers','ProviderController');
Route::get('/providers/delete/{provider}','ProviderController@delete')->name('providers.delete');

Route::resource('accounts','AccountController');
Route::get('/accounts/delete/{account}','AccountController@delete')->name('accounts.delete');

Route::resource('billings','BillingController');
Route::get('/billings/delete/{billing}','BillingController@delete')->name('billings.delete');

Route::get('/equipmentEmployees/index/{employee}','EquipmentEmployeeController@index')->name('equipmentEmployees.index');
Route::get('/equipmentEmployees/create/{employee}','EquipmentEmployeeController@create')->name('equipmentEmployees.create');
Route::post('/equipmentEmployees','EquipmentEmployeeController@store')->name('equipmentEmployees.store');
Route::get('/equipmentEmployees/{id}','EquipmentEmployeeController@show')->name('equipmentEmployees.show'); 
Route::get('/equipmentEmployees/{id}/edit','EquipmentEmployeeController@edit')->name('equipmentEmployees.edit'); 
Route::patch('/equipmentEmployees/{equipmentEmployee}','EquipmentEmployeeController@update')->name('equipmentEmployees.update');
Route::get('/equipmentEmployees/delete/{id}','EquipmentEmployeeController@delete')->name('equipmentEmployees.delete');
Route::delete('/equipmentEmployees/{equipmentEmployee}','EquipmentEmployeeController@destroy')->name('equipmentEmployees.destroy');

Route::get('/equipments','EquipmentController@index')->name('equipments.index');
Route::get('/equipments/create','EquipmentController@create')->name('equipments.create');
Route::get('/equipments/{idcard}','EquipmentController@show')->name('equipments.show'); 
Route::post('/equipments','EquipmentController@store')->name('equipments.store');
Route::get('/equipments/edit/{sn}','EquipmentController@edit')->name('equipments.edit');
Route::patch('/equipments/{sn}','EquipmentController@update')->name('equipments.update');

Route::get('/computers/index/{employee}','ComputerController@index')->name('computers.index');
Route::get('/computers/create','ComputerController@create')->name('computers.create');
Route::get('/computers/{idcard}','ComputerController@show')->name('computers.show'); 
Route::post('/computers','ComputerController@store')->name('computers.store');
Route::get('/computers/edit/{sn}','ComputerController@edit')->name('computers.edit');
Route::patch('/computers/{sn}','ComputerController@update')->name('computers.update');

Route::get('/monitors/index/{employee}','MonitorController@index')->name('monitors.index');
Route::get('/monitors/create','MonitorController@create')->name('monitors.create');
Route::get('/monitors/{idcard}','MonitorController@show')->name('monitors.show'); 
Route::post('/monitors','MonitorController@store')->name('monitors.store');
Route::get('/monitors/edit/{sn}','MonitorController@edit')->name('monitors.edit');
Route::patch('/monitors/{sn}','MonitorController@update')->name('monitors.update');

Route::get('/printers/index/{employee}','PrinterController@index')->name('printers.index');
Route::get('/printers/create','PrinterController@create')->name('printers.create');
Route::get('/printers/{idcard}','PrinterController@show')->name('printers.show'); 
Route::post('/printers','PrinterController@store')->name('printers.store');
Route::get('/printers/edit/{sn}','PrinterController@edit')->name('printers.edit');
Route::patch('/printers/{sn}','PrinterController@update')->name('printers.update');

Route::get('/budgets','BudgetController@resume')->name('budgets.resume');
Route::get('/budgets/edit/{id}','BudgetController@edit')->name('budgets.edit');
Route::get('/budgets/{account}/{year}','BudgetController@index')->name('budgets.index');
Route::get('/budgets/create/{account}','BudgetController@create')->name('budgets.create');
Route::post('/budgets','BudgetController@store')->name('budgets.store');
Route::get('/budgets/{id}','BudgetController@show')->name('budgets.show');
Route::patch('/budgets/{budget}','BudgetController@update')->name('budgets.update');
Route::delete('/budgets/{budget}','BudgetController@destroy')->name('budgets.destroy');



Route::get('/reports/individual/{employee}','ReportController@showRDR')->name('reports.showRDR');
Route::get('/reports/individual/preview/{employee}','ReportController@printRDR')->name('reports.printRDR');

























/* Route::get('/users','UserController@index')->name('users.index');
Route::get('/users/create','UserController@create')->name('users.create');
Route::post('/users','UserController@store')->name('users.store');
Route::get('/users/{user}','UserController@show')->name('users.show');
Route::get('/users/edit/{user}','UserController@edit')->name('users.edit');
Route::patch('/users/{user})','UserController@update')->name('users.update'); */







/* Route::get('/types','TypeController@index')->name('types.index');
Route::get('/types/create','TypeController@create')->name('types.create');
Route::post('/types','TypeController@store')->name('types.store');
Route::get('/types/{type}','TypeController@show')->name('types.show');
Route::get('/types/edit/{type}','TypeController@edit')->name('types.edit');
Route::patch('/types/{type})','TypeController@update')->name('types.update');
Route::delete('/types/{type}','TypeController@destroy')->name('types.distroy');

Route::get('/brands','BrandController@index')->name('brands.index');
Route::get('/brands/create','BrandController@create')->name('brands.create');
Route::post('/brands','BrandController@store')->name('brands.store');
Route::get('/brands/{brand}','BrandController@show')->name('brands.show');
Route::get('/brands/edit/{brand}','BrandController@edit')->name('brands.edit');
Route::patch('/brands/{brand})','BrandController@update')->name('brands.update');
Route::delete('/brands/{brand}','BrandController@destroy')->name('brands.distroy');

Route::get('/regions','RegionController@index')->name('regions.index');
Route::get('/regions/create','RegionController@create')->name('regions.create');
Route::post('/regions','RegionController@store')->name('regions.store');
Route::get('/regions/{region}','RegionController@show')->name('regions.show');
Route::get('/regions/edit/{region}','RegionController@edit')->name('regions.edit');
Route::patch('/regions/{region})','RegionController@update')->name('regions.update');
Route::delete('/regions/{region}','RegionController@destroy')->name('regions.distroy');

Route::get('/positions','PositionController@index')->name('positions.index');
Route::get('/positions/create','PositionController@create')->name('positions.create');
Route::post('/positions','PositionController@store')->name('positions.store');
Route::get('/positions/{position}','PositionController@show')->name('positions.show');
Route::get('/positions/edit/{position}','PositionController@edit')->name('positions.edit');
Route::patch('/positions/{position})','PositionController@update')->name('positions.update');
Route::delete('/positions/{position}','PositionController@destroy')->name('positions.distroy');

Route::get('/sectors','SectorController@index')->name('sectors.index');
Route::get('/sectors/create','SectorController@create')->name('sectors.create');
Route::post('/sectors','SectorController@store')->name('sectors.store');
Route::get('/sectors/{sector}','SectorController@show')->name('sectors.show');
Route::get('/sectors/edit/{sector}','SectorController@edit')->name('sectors.edit');
Route::patch('/sectors/{sector})','SectorController@update')->name('sectors.update');
Route::delete('/sectors/{sector}','SectorController@destroy')->name('sectors.distroy');

Route::get('/oss','OsController@index')->name('oss.index');
Route::get('/oss/create','OsController@create')->name('oss.create');
Route::post('/oss','OsController@store')->name('oss.store');
Route::get('/oss/{os}','OsController@show')->name('oss.show');
Route::get('/oss/edit/{os}','OsController@edit')->name('oss.edit');
Route::patch('/oss/{os})','OsController@update')->name('oss.update');
Route::delete('/oss/{os}','OsController@destroy')->name('oss.distroy');

Route::get('/systems','SystemController@index')->name('systems.index');
Route::get('/systems/create','SystemController@create')->name('systems.create');
Route::post('/systems','SystemController@store')->name('systems.store');
Route::get('/systems/{system}','SystemController@show')->name('systems.show');
Route::get('/systems/edit/{system}','SystemController@edit')->name('systems.edit');
Route::patch('/systems/{system})','SystemController@update')->name('systems.update');
Route::delete('/systems/{system}','SystemController@destroy')->name('systems.distroy');

Route::get('/models','ModelController@index')->name('models.index');
Route::get('/models/create','ModelController@create')->name('models.create');
Route::post('/models','ModelController@store')->name('models.store');
Route::get('/models/{model}','ModelController@show')->name('models.show');
Route::get('/models/edit/{model}','ModelController@edit')->name('models.edit');
Route::patch('/models/{model})','ModelController@update')->name('models.update');
Route::delete('/models/{model}','ModelController@destroy')->name('models.distroy');

Route::get('/offices','OfficeController@index')->name('offices.index');
Route::get('/offices/create','OfficeController@create')->name('offices.create');
Route::post('/offices','OfficeController@store')->name('offices.store');
Route::get('/offices/{office}','OfficeController@show')->name('offices.show');
Route::get('/offices/edit/{office}','OfficeController@edit')->name('offices.edit');
Route::patch('/offices/{office})','OfficeController@update')->name('offices.update');
Route::delete('/offices/{office}','OfficeController@destroy')->name('offices.distroy');

Route::get('/cellularPlans','CellularPlanController@index')->name('cellularPlans.index');
Route::get('/cellularPlans/create','CellularPlanController@create')->name('cellularPlans.create');
Route::post('/cellularPlans','CellularPlanController@store')->name('cellularPlans.store');
Route::get('/cellularPlans/{cellularPlan}','CellularPlanController@show')->name('cellularPlans.show');
Route::get('/cellularPlans/edit/{cellularPlan}','CellularPlanController@edit')->name('cellularPlans.edit');
Route::patch('/cellularPlans/{cellularPlan})','CellularPlanController@update')->name('cellularPlans.update');
Route::delete('/cellularPlans/{cellularPlan}','CellularPlanController@destroy')->name('cellularPlans.distroy');

Route::get('/employees','EmployeeController@index')->name('employees.index');
Route::get('/employees/create','EmployeeController@create')->name('employees.create');
Route::post('/employees','EmployeeController@store')->name('employees.store');
Route::get('/employees/{employee}','EmployeeController@show')->name('employees.show');
Route::get('/employees/edit/{employee}','EmployeeController@edit')->name('employees.edit');
Route::patch('/employees/{employee})','EmployeeController@update')->name('employees.update');
Route::delete('/employees/{employee}','EmployeeController@destroy')->name('employees.distroy'); */

/* Route::get('/equipmentEmployees/create','EmployeeController@create')->name('equipmentEmployees.create');
Route::post('/equipmentEmployees','EmployeeController@store')->name('equipmentEmployees.store');
Route::get('/equipmentEmployees/{equipmentEmployee}','EmployeeController@show')->name('equipmentEmployees.show');
Route::get('/equipmentEmployees/edit/{equipmentEmployee}','EmployeeController@edit')->name('equipmentEmployees.edit');
Route::patch('/equipmentEmployees/{equipmentEmployee})','EmployeeController@update')->name('equipmentEmployees.update');
Route::get('/equipmentEmployees/delete/{equipmentEmployee}','EmployeeController@delete')->name('equipmentEmployees.delete');
Route::delete('/equipmentEmployees/{equipmentEmployee}','EmployeeController@destroy')->name('equipmentEmployees.distroy'); */




