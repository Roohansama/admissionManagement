<?php


use App\Livewire\AcademicsForm;
use App\Livewire\AdmissionList;
use App\Livewire\StudentForm;
use App\Livewire\GuardiansForm;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('components.dashboard');
// });

Route::get('/admission/add/{id?}', StudentForm::class)->name('student');
Route::get('/admission/guardian/{id}', GuardiansForm::class)->name('guardian');
Route::get('/admission/academic/{id}', AcademicsForm::class)->name('academic');
Route::get('/admission/list', AdmissionList::class)->name('list');