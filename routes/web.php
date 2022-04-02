<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\Department\DepartmentController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Mpesa\MpesaController;
use App\Http\Controllers\Frontend\Home\HomepageController;

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


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Frontend Routes
Route::get('/', [HomepageController::class, 'homepage'])->name('home');

// Backend Routes
Route::prefix('admin')->name('admin.')->group(function(){
    // These are the routes for non-authourized and unauthenticated users will be redirected to
    Route::middleware(['guest:admin', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'backend.admin.login')->name('login');
        Route::post('/check', [AdminController::class, 'check'])->name('check');
    });
    // These are the routes for authourized and authenticated administrator will be redirected to
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/', 'backend.admin.home')->name('home');
        // Student Routes
        Route::get('/create/student', [StudentController::class, 'create'])->name('student.create');
        Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
        Route::get('/students', [StudentController::class, 'index'])->name('student.index');
        Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
        Route::patch('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
        Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

        // Instructor Route
        Route::get('/create/instructor', [InstructorController::class, 'create'])->name('instructor.create');
        Route::post('/instructor/store', [InstructorController::class, 'store'])->name('instructor.store');
        Route::get('/instructors', [InstructorController::class, 'index'])->name('instructor.index');
        Route::get('/instructor/edit/{id}', [InstructorController::class, 'edit'])->name('instructor.edit');
        Route::patch('/instructor/update/{id}', [InstructorController::class, 'update'])->name('instructor.update');
        Route::delete('/instructor/delete/{id}', [InstructorController::class, 'destroy'])->name('instructor.destroy');

        // Department Routes
        Route::get('/create/department', [DepartmentController::class, 'create'])->name('department.create');
        Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store');
        Route::get('/departments', [DepartmentController::class, 'index'])->name('department.index');
        Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
        Route::patch('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
        Route::delete('/department/delete/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');

        // Department Routes
        Route::get('/create/course', [CourseController::class, 'create'])->name('course.create');
        Route::post('/course/store', [CourseController::class, 'store'])->name('course.store');
        Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
        Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
        Route::patch('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
        Route::delete('/course/delete/{id}', [CourseController::class, 'destroy'])->name('course.destroy');
        
    });
});

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth:admin']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
