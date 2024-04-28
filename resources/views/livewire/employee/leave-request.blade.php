<div class="container mx-auto">
    <div>
        <h1 class="text-3xl font-sans">
            Leave request
        </h1>
    </div>

    <div class="flex flex-col bg-slate-300">
        <form wire:submit.prevent="requestLeave">

            <label for="leave_type">Leave type</label>
            <input type="text" wire:model="leave_type">
            
            <label for="leave_start_date">Leave start date</label>
            <input type="date" wire:model="leave_start_date">
            
            <label for="leave_end_date">Leave end date</label>
            <input type="date" wire:model="leave_end_date">
            
            <label for="half_or_full_day">Select Half Day or Full Day</label>
            <select name="half_or_full_day" wire:model="half_or_full_day">
                <option value="half_day">Half Day</option>
                <option value="full_day">Full Day</option>
            </select>
            
            <label for="reason">Reason</label>
            <textarea name="reason" wire:model="reason" cols="30" rows="10"></textarea>
            
            <button type="submit">Send Request</button>
        </form>
    </div>
</div>
