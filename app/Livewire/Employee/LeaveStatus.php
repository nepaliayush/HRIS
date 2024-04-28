<?php

namespace App\Livewire\Employee;
use App\Models\Leave;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LeaveStatus extends Component
{
    public $leaveList;

    public function render()

    {
        $user = Auth::user();

        // Check if the user is authenticated
        if ($user) {
            // Check if the user has an associated employee record
            if ($user->employee) {
                $employee = $user->employee;
                // Fetch leave list for the employee
                $this->leaveList = Leave::where('employee_id', $employee->id)->get(); 
            } else {
                // Handle case where user doesn't have an associated employee
                // You may want to redirect the user to a different page or show an error message
                // For now, let's set leaveList to an empty array
                $this->leaveList = [];
            }
        } else {
            // Handle case where user is not authenticated
            // You may want to redirect the user to the login page
            // For now, let's set leaveList to an empty array
            $this->leaveList = [];
        }
        
        return view('livewire.employee.leave-status');
    }
}
