<?php

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecordController;

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

// Common Resource Routes:
// Index - Show all records
// show - Show single record
// create - show form to create new record
// store - Store new record
// edit - Show form to edit record
// update - Update record
// destroy - Delete record

// All Records
Route::get('/', [RecordController::class, 'index']);

// Show Create Form
Route::get('/records/create', [RecordController::class, 'create']);

// Store Record Data
Route::post('/records', [RecordController::class, 'store']);

// Show Edit Form
Route::get('/records/{record}/edit', [RecordController::class, 'edit']);

// Edit Submit to Update
Route::put('/records/{record}', [RecordController::class, 'update']);

// Delete Record
Route::delete('/records/{record}', [RecordController::class, 'destroy']);

// Single Record
Route::get('/records/{record}', [RecordController::class, 'show']);

// Show Registration/Create Form
Route::get('/register', [UserController::class, 'create']);