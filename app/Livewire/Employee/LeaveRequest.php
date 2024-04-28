<?php


namespace App\Livewire\Employee;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Leaverequest extends Component
{
    
    public $leave_type;
    public $leave_start_date;
    public $leave_end_date;
    public $half_or_full_day;
    public $reason;

    public function requestLeave()
    {
        // Validate the form data
        $validated = $this->validate([
            'leave_type' => ['required', 'string', 'max:255'],
            'leave_start_date' => ['required', 'date'],
            'leave_end_date' => ['required', 'date'],
            'half_or_full_day' => ['required', 'string'],
            'reason' => ['required', 'string', 'max:255'],
        ]);

        // Get the authenticated user's employee record
        $user = Auth::user();
        $employee = $user->employee;

        // Create a new leave request associated with the employee
        $leaveRequest = $employee->leave()->create([
            'employee_id'=>$employee->id,
            'leave_type' => $validated['leave_type'],
            'leave_start_date' => $validated['leave_start_date'],
            'leave_end_date' => $validated['leave_end_date'],
            'half_or_full_day' => $validated['half_or_full_day'],
            'reason' => $validated['reason'],
            'status' => 'pending',
        ]);

        // Provide feedback to the user
        session()->flash('message', 'Leave request submitted successfully.');
      
        // Reset the form fields
        $this->reset();
    }
    public function render()
    {
        return view('livewire.employee.leave-request');
    }
}
