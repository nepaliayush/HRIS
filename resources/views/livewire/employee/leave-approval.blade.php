<div>


    <!-- List records -->
    <table border='1' style='border-collapse: collapse;'>
        <thead>
            <tr>
               <th>Employee ID</th>
               <th>Leave Type</th>
               <th>Leave Start Date</th>
               <th>Leave End Date</th>
               <th>Half or Full Day</th>
               <th>Reason</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
          
                 @foreach($leaveList as $leaveLists)
                     <tr>
                         <td>{{ $leaveLists->employee_id}}</td>
                         <td>{{ $leaveLists->leave_type}}</td>
                         <td>{{ $leaveLists->leave_start_date}}</td>
                         <td>{{ $leaveLists->leave_end_date}}</td>
                         <td>{{ $leaveLists->half_or_full_day}}</td>
                         <td>{{ $leaveLists->reason}}</td>
                         <td>
                            <button type="submit" wire:click="acceptLeave">Accept</button>
                            <button type="submit"wire:click="rejectLeave">Reject</button>
                         </td>
                     </tr>
                 @endforeach
       
        </tbody>
    </table>

</div>