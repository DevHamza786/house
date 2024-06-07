<?php

namespace App\Http\Controllers;

use App\Entry;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create()
    {
        return view('entry.create');
    }

    public function edit(Entry $entry)
    {
        return view('entry.edit', compact('entry'));
    }

    public function store()
    {
        $data = request()->validate([
            'plot' => '',
            'serial' => '',
            'area' => '',
            'phase' => '',
            'name' => '',
            'name2' => '',
            'name3' => '',
            'name4' => '',
            'name5' => '',
            'name6' => '',
            'name7' => '',
            'name8' => '',
            'name9' => '',
            'name10' => '',
            'address' => '',
            'date' => '',
            'msd' => '',
            'phone' => '',
            'status' => '1',
            'wp' => '',
            'dp' => '',
            'ms' => '',
            'upto' => '',
            'cost_of_land' => '',
            'other_charges' => '',
            'bounder_wall_charges' => '',
            'balance' => '',
        ]);
        auth()->user()->entries()->create($data);
        if (Entry::where('name10', '=', $data['name10'])->count() > 2 && $data['name10'] != '') {
            return redirect('home')->with('message', 'This N.I.C is occurred more than 2 times');
        }
        return redirect('home');
    }

    public function destroy($id)
    {

        $entry = Entry::find($id);
        $entry->status = !$entry->status;
        $entry->save();
        return redirect('home');
    }

    public function update(Entry $entry)
    {
        $data = request()->validate([
            'plot' => '',
            'serial' => '',
            'area' => '',
            'phase' => '',
            'name' => '',
            'name2' => '',
            'name3' => '',
            'name4' => '',
            'name5' => '',
            'name6' => '',
            'name7' => '',
            'name8' => '',
            'name9' => '',
            'name10' => '',
            'address' => '',
            'date' => '',
            'msd' => '',
            'phone' => '',
            'wp' => '',
            'dp' => '',
            'upto' => '',
            'ms' => '',
            'cost_of_land' => '',
            'other_charges' => '',
            'bounder_wall_charges' => '',
            'balance' => '',
        ]);
        $entry->update($data);
        if (Entry::where('name10', '=', $data['name10'])->count() > 2 && $data['name10'] != '') {
            return redirect('home')->with('message', 'This N.I.C is occurred more than 2 times');
        }
        return redirect('home');
    }

    public function print($id)
    {
        $entry = Entry::find($id);
        return view('entry.print_file', compact('entry'));
    }

    // app/Http/Controllers/EntryController.php

    public function printSelected(Request $request)
    {
        // dd($request->All());
        $ids = $request->input('ids');
        $entries = Entry::whereIn('id', explode(',', $ids))->get();

        // Render a view for printing
        return view('entry.selectedprint', compact('entries'));
    }

    public function printPreview(Request $request)
    {
        $type = gettype($request->input('columns'));
        if($type == 'string'){
            $selectedColumns = explode(',',$request->input('columns'));
        }else{
            $selectedColumns = $request->input('columns');
        }
        $entries = Entry::all(); // Replace with your actual model and query logic

        // Define columns in the order they are shown in the table
        $columns = [
            'ms' => 'Ms',
            'plot' => 'Plot',
            'serial' => 'serial',
            'area' => 'area',
            'phase' => 'Phase',
            'name' => 'Name',
            'address' => 'Address',
            'date' => 'Date',
            'msd' => 'MSD',
            'phone' => 'Phone',
            'nic' => 'N.I.C',
            'dp' => 'D/P',
            'wp' => 'W/C',
            'upto' => 'Upto',
            'status' => 'Status',
        ];

        // Initialize an array to store selected columns in reverse order
        $columnsOrdered = [];
        $selectedColumns = array_reverse($selectedColumns);

        // Map selected columns to actual column names in your database
        foreach ($selectedColumns as $selectedColumn) {
            // Append selected columns in the reverse order
            switch ($selectedColumn) {
                case 'Ms':
                    $columnsOrdered[] = 'ms';
                    break;
                case 'Plot':
                    $columnsOrdered[] = 'plot';
                    break;
                case 'serial':
                    $columnsOrdered[] = 'serial';
                    break;
                case 'area':
                    $columnsOrdered[] = 'area';
                    break;
                case 'Phase':
                    $columnsOrdered[] = 'phase';
                    break;
                case 'Name':
                    $columnsOrdered[] = 'name';
                    break;
                case 'Address':
                    $columnsOrdered[] = 'address';
                    break;
                case 'Date':
                    $columnsOrdered[] = 'date';
                    break;
                case 'MSD':
                    $columnsOrdered[] = 'msd';
                    break;
                case 'Phone':
                    $columnsOrdered[] = 'phone';
                    break;
                case 'N.I.C':
                    $columnsOrdered[] = 'nic';
                    break;
                case 'D/P':
                    $columnsOrdered[] = 'dp';
                    break;
                case 'W/C':
                    $columnsOrdered[] = 'wp';
                    break;
                case 'Upto':
                    $columnsOrdered[] = 'upto';
                    break;
                case 'Status':
                    $columnsOrdered[] = 'status';
                    break;
                default:
                    // Handle unexpected column values
                    break;
            }
        }
        return view('entry.printpreview', compact('columnsOrdered', 'entries', 'columns'));
    }

}
