<?php

use App\Livewire\Employee\LeaveApproval;
use App\Livewire\Employee\LeaveStatus;
use Illuminate\Support\Facades\Route;
use App\Livewire\Employee\LeaveRequest;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    // Route::view('/leave-request', 'livewire.employee.leave-request')
    // ->middleware(['auth'])
    // ->name('leave-request');
    Route::get('/leave-request', LeaveRequest::class) // Use the Livewire component class directly
    ->middleware(['auth']) // Add middleware if needed
    ->name('leave-request');
    Route::get('/leave-approval', LeaveApproval::class) // Use the Livewire component class directly
    ->middleware(['auth','role:hr']) // Add middleware if needed
    ->name('leave-approval');

    Route::get('/leave-status', LeaveStatus::class) // Use the Livewire component class directly
    ->middleware('auth') // Add middleware if needed
    ->name('leave-status');
require __DIR__.'/auth.php';
