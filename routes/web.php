<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;
use App\Models\Employee;
use App\Models\Department;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/user', function() {

//     User::factory()->count(3)->create();

// });



// Route::get('/address', function () {

//     Address::create([
//         'user_id' => 1,
//         'country' => 'srilanka',
//     ]);
//     Address::create([
//         'user_id' => 2,
//         'country' => 'china',
//     ]);
//     Address::create([
//         'user_id' => 3,
//         'country' => 'indai',
//     ]);
// });

Route::get('/user', function () {   //hasOne

     $data = User::with('address')->get();
     return view('users.index', compact('data'));

    //  $data = User::with('address')->where('id',1)->get();
    //  return view('users.index', compact('data'));
});

Route::get('/address', function () {  //belonsTo

    $address = Address::with('user')->get();
    return view('users.index', compact('address'));

});



// Route::get('/employee', function () {

//     Employee::create([
//         'name' => 'rusiru',
//         'email' => 'rusiru@gmail.com',
//         'con_number' => '0775093711',
//     ]);
//     Employee::create([
//         'name' => 'yasas',
//         'email' => 'yasas@gmail.com',
//         'con_number' => '0775093715',
//     ]);
//     Employee::create([
//         'name' => 'dinuka',
//         'email' => 'dinuka@gmail.com',
//         'con_number' => '0715093711',
//     ]);
// });


// Route::get('/user', function() {

//     User::factory()->count(3)->create();

// });


// Route::get('/department', function () {

//     Department::create([
//         'name' => 'hr',
//         'location' => 'colombo 7',
//         'employee_id' => 1,
//     ]);
//     Department::create([
//         'name' => 'accounting',
//         'location' => 'colombo 8',
//         'employee_id' => 2,
//     ]);
//     Department::create([
//         'name' => 'it',
//         'location' => 'colombo 10',
//         'employee_id' => 3,
//     ]);
// });


Route::get('/department',[EmployeeController::class, 'index']);
