<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // dd($request->all());
        if (!empty($request->input('ms')) || !empty($request->input('plot')) || !empty($request->input('phase')) || !empty($request->input('name'))) {
            $query = Entry::query();

            // Adding conditions based on input values
            if (!empty($request->input('ms'))) {
                $query->where('ms', $request->input('ms'));
            }

            if (!empty($request->input('plot'))) {
                $query->where('plot', $request->input('plot'));
            }

            if (!empty($request->input('phase'))) {
                $query->where('phase', $request->input('phase'));
            }

            if (!empty($request->input('name'))) {
                $name = strtolower($request->input('name'));
                $query->where(DB::raw('LOWER(name)'), 'like', "%{$name}%");
            }

            // Ordering the results
            $query->orderBy('plot', 'asc');

            // Retrieving the results
            $entries = $query->get();
        } else {
            $entries = Entry::all();
        }

        return view('home', compact('entries'));
    }

    public function entries()
    {
        return Datatables::of(Entry::query())->make(true);
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                'dom'          => 'Bfrtip',
                'buttons'      => ['export', 'print', 'reset', 'reload'],
            ]);
    }

    public function log()
    {
        return redirect('home/create');
    }

    public function receiptCreate()
    {
        return view('receipt.create');
    }

    public function receiptPrint(Request $request)
    {
        $receipt = $request->all();
        return view('receipt.print', compact('receipt'));
    }
}
