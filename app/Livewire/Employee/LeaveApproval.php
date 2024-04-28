<?php

namespace App\Livewire\Employee;

use Livewire\Component;
use App\Livewire\Employee\Leaverequest;
use App\Models\Leave;
class LeaveApproval extends Component
{
    public $leaveList;

    public function acceptLeave(){
        Leave::where('status', 'pending')->update(['status' => 'approved']);
    }
    public function rejectLeave(){
        Leave::where('status', 'pending')->update(['status' => 'rejected']);
    }
    public function render()
    
    {
        $this->leaveList = Leave::all(); 
        //dd($this->datas);
        return view('livewire.employee.leave-approval');
    }
}
