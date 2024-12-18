<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staff\DashboardController;
use App\Http\Controllers\Staff\OrganisationController;
use App\Http\Controllers\Staff\FacultyController;
use App\Http\Controllers\Staff\DepartmentController;
use App\Http\Middleware\CheckUserType;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('home');});
Route::get('/Programs',function () {return view('Programs');});
Route::get('/Contact', function () {return view('Contact');});
Route::get('/About', function () {return view('About');});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::prefix('staff')->middleware(CheckUserType::class.':1')->group(function()
{
Route::get('/dashboard', [DashboardController::class, 'ViewDashboard'])->name('staff.dashboard');

Route::get('/organisation', [OrganisationController::class, 'ViewOrganisation'])->name('staff.organisation');
Route::post('/organisations', [OrganisationController::class, 'store'])->name('organisations.store');


Route::get('/faculty',[FacultyController::class,'Index'])->name('staff.faculty');
Route::post('/faculties', [FacultyController::class, 'store'])->name('faculties.store');


Route::get('/department',[DepartmentController::class,'Index'])->name('staff.department');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');
// Route::post('/submit-form', [FormController::class, 'store'])->name('form.store');



//function () {return view('Staff/Faculty');});
//->name('staff.organisation');
//     Route::get('/Dashboard', function () { return view('Staff/Home');});
// Route::get('/NewAdmission', function () { return view('Staff/StudentAdmission');});
// Route::get('/ManageStudent', function () {return view('Staff/ManageStudent');});

// //Administration
 //Route::get('/organisation', function () {return view('Staff/Organisation');});

// Route::get('/Department', function () {return view('Staff/Department');});
// Route::get('/Program', function () {return view('Staff/Program');});

});

Route::get('/not-found', function () { return view('permissions');});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
