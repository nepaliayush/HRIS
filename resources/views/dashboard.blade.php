<x-app-layout>

<div class="flex h-screen ">

    <aside class="w-64 bg-white h-full ">
        <ul class="">
            <a href="/leave-request">
                <li class="p-2 text-justify hover:bg-slate-300">Request Leave</li>
            </a>

            <a href="/leave-status">
                <li class="p-2 text-justify  hover:bg-slate-300">Leave Status</li>
            </a>
            <a href="">

                <li class="p-2 text-justify  hover:bg-slate-300">as</li>
            </a>
            <a href="">
                <li class="p-2 text-justify  hover:bg-slate-300">as</li>

            </a>
                @role('hr')
            <a href="/leave-approval">

                <li class="p-2 text-justify  hover:bg-slate-300">Leave Approval</li>
            </a>
            @endrole
        </ul>
    </aside>

    <main>
    <div class="flex mx-10 bg-slate-50 m-5 v-screen space-x-10 ">
    <div class="w-1/2 p-20 bg-slate-400">
        <h1 class="text-white font text-xl">
            No of Employees
        </h1>
    </div>
    <div class="w-1/2 p-20 bg-slate-400">
        <h1 class="text-white font text-xl">
            No of Staff
        </h1>
    </div>
    <div class="w-1/2 p-20 bg-slate-400">
        <h1 class="text-white font text-xl">
            No of Staff
        </h1>
    </div>
    <div class="w-1/2 p-20 bg-slate-400">
        <h1 class="text-white font text-xl">
            No of Staff
        </h1>
    </div>
</div>

      
    </main>
</div>
</x-app-layout>  