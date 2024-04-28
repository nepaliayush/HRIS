<x-app-layout>
<div>


    <!-- List records -->
    <table border='1' style='border-collapse: collapse;'>
        <thead>
            <tr>
                <th>S.NO</th>
               <th>Employee ID</th>
               <th>Leave Type</th>
               <th>Leave Start Date</th>
               <th>Leave End Date</th>
               <th>Half or Full Day</th>
               <th>Reason</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
          
                 @foreach($leaveList as $leaveLists)
                     <tr>
                        <td>{{$leaveLists->id}}</td>
                         <td>{{ $leaveLists->employee_id}}</td>
                         <td>{{ $leaveLists->leave_type}}</td>
                         <td>{{ $leaveLists->leave_start_date}}</td>
                         <td>{{ $leaveLists->leave_end_date}}</td>
                         <td>{{ $leaveLists->half_or_full_day}}</td>
                         <td>{{ $leaveLists->reason}}</td>
                         <td>{{$leaveLists->status}}</td>
                         
                     </tr>
                 @endforeach
       
        </tbody>
    </table>

</div>
</x-app-layout>