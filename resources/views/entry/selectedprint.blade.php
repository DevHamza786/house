<!-- resources/views/entry/print.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Print Entries</title>
    <style>
        /* Add any necessary styles for printing */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table,
        .table th,
        .table td {
            border: 1px solid black;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <table class="table" id="entry-table">
        <thead>
            <tr>
                <th>#</th>
                <th>MS</th>
                <th>Plot</th>
                <th>S#</th>
                <th>A/#</th>
                <th>D/P</th>
                <th>W/C</th>
                <th>PH</th>
                <th>Upto</th>
                <th>Name</th>
                <th>Address</th>
                <th>N.I.C</th>
                <th>Date</th>
                <th>M.S (D)</th>
                <th>Phone</th>
                <th>Cost of Land</th>
                <th>Other Charges</th>
                <th>Bounder Wall Charges</th>
                <th>Balance</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entries as $entry)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $entry->ms }}</td>
                    <td>{{ $entry->plot }}</td>
                    <td>{{ $entry->serial }}</td>
                    <td>{{ $entry->area }}</td>
                    <td>{{ $entry->dp }}</td>
                    <td>{{ $entry->wp }}</td>
                    <td>{{ $entry->phase }}</td>
                    <td>{{ $entry->upto }}</td>
                    <td>{{ $entry->name }}</td>
                    <td>{{ $entry->address }}</td>
                    <td>{{ $entry->name10 }}</td>
                    <td>{{ $entry->date }}</td>
                    <td>{{ $entry->msd }}</td>
                    <td>{{ $entry->phone }}</td>
                    <td>{{ $entry->cost_of_land }}</td>
                    <td>{{ $entry->other_charges }}</td>
                    <td>{{ $entry->bounder_wall_charges }}</td>
                    <td>{{ $entry->balance }}</td>
                    <td>
                        @if ($entry->status)
                            <span class="badge badge-success">Open</span>
                        @else
                            <span class="badge badge-warning">Cancelled</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
