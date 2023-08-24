<?php
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

/*admin route*/
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
