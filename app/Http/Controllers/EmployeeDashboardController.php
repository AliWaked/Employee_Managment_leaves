<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeLeaveRequest;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class EmployeeDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if (Auth::guard('admin')) {
            $leaves = DB::table('employee_leave')->get();
        } else {
            $leaves = Auth::guard('employee')->user()->load('leaves')->leaves;
        }
        return view('dashboard', ['leave' => $leaves]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('send-leave', ['leaves' => Leave::active()->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeLeaveRequest $request)
    {
        DB::table('employee_leave')->insert([
            'employee_id' => $request->user('employee')->id,
            'leave_id' => $request->leave_type,
            'start_date' => $request->start_date,
            'duration_days' => $request->number_of_days,
            'send_at' => now(),
        ]);
        return to_route('employee.dashbaord.index')->with('success', 'send leave request');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $leave = Auth::guard('employee')->user()->leaves()->wherePivot('id', $id)->first();
        return view('show-leave', ['leave' => $leave]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}