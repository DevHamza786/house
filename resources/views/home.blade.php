@extends('layouts.app')
@section('content')
    @if (Session::has('message'))
        <p class="alert alert-warning">{{ Session::get('message') }}</p>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="btn btn-primary" href="/entry/create">Entries</a>
                                <button id="" class="btn btn-primary justify-content-right" data-toggle="modal"
                                    data-target="#printModal"> Print</button>
                                <button id="print-selected" class="btn btn-primary justify-content-right"> Selected
                                    Print</button>
                                <a id="" class="btn btn-primary" href="{{ route('home.receipt.create') }}">
                                    Receipt</a>
                            </div>
                            <div class="col-md-8">
                                <form class="d-flex" style="justify-content:space-between">
                                    <div class="form-group d-flex">
                                        <label for="ms" class="searchDiv mr-2 pt-2">MS</label>
                                        <input type="text" class="form-control searchDiv" id="ms"
                                            value="{{ request('ms') }}" name="ms">
                                    </div>
                                    <div class="form-group d-flex">
                                        <label for="plot" class="searchDiv mr-2 pt-2">Plot</label>
                                        <input type="text" class="form-control searchDiv" id="plot"
                                            value="{{ request('plot') }}" name="plot">
                                    </div>
                                    <div class="form-group d-flex">
                                        <label for="name" class="searchDiv mr-2 pt-2">Name</label>
                                        <input type="text" class="form-control searchDiv" id="name"
                                            value="{{ request('name') }}" name="name">
                                    </div>
                                    <div class="form-group d-flex">
                                        <label for="phase" class="searchDiv mr-2 pt-2">Phase</label>
                                        <select class="form-control searchDiv" id="phase" name="phase"
                                            style="width: 200px">
                                            <option value="">select</option>
                                            <option value="1" @if (request('phase') == 1) selected @endif>1
                                            </option>
                                            <option value="2" @if (request('phase') == 2) selected @endif>2
                                            </option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="height:40px">Search</button>


                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table" id="entry-table">
                            <thead>
                                <th class="no-print"><input type="checkbox" id="select-all" /></th>
                                <th>#</th>
                                <th class="msColumn">MS</th>
                                <th class="plotColumn">Plot</th>
                                <th class="serialColumn">S#</th>
                                <th class="areaColumn">A/#</th>
                                <th class="dpColumn">D/P</th>
                                <th class="wpColumn">W/C</th>
                                <th class="phaseColumn">PH</th>
                                <th class="uptoColumn">Upto</th>
                                <th class="nameColumn">Name</th>
                                <th class="addressColumn">Address</th>
                                <th class="nicColumn">N.I.C</th>
                                <th class="dateColumn">Date</th>
                                <th class="msdColumn">M.S (D)</th>
                                <th class="phoneColumn">Phone</th>
                                <th class="phoneColumn">C/L</th>
                                <th class="phoneColumn">O/C</th>
                                <th class="phoneColumn">B/C</th>
                                <th class="phoneColumn">Balance</th>
                                <th class="statusColumn">Status</th>
                                <th class="actionTable">Action</th>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @foreach ($entries as $entry)
                                    <tr>
                                        <td class="no-print"><input type="checkbox" class="select-row" data-id="{{ $entry->id }}" /></td>
                                        <td class="stylingclass">{{ $i++ }}</td>
                                        <td class="msColumn stylingclass">{{ $entry->ms }}</td>
                                        <td class="plotColumn stylingclass">{{ $entry->plot }}</td>
                                        <td class="serialColumn stylingclass">{{ $entry->serial }}</td>
                                        <td class="areaColumn stylingclass">{{ $entry->area }}</td>
                                        <td class="dpColumn stylingclass">{{ $entry->dp }}</td>
                                        <td class="wpColumn stylingclass">{{ $entry->wp }}</td>
                                        <td class="phaseColumn stylingclass">{{ $entry->phase }}</td>
                                        <td class="uptoColumn stylingclass">{{ $entry->upto }}</td>
                                        <td class="nameColumn stylingclass">{{ $entry->name }}</td>
                                        <td class="addressColumn stylingclass">{{ $entry->address }}</td>
                                        <td class="nicColumn stylingclass">{{ $entry->name10 }}</td>
                                        <td class="dateColumn stylingclass">{{ $entry->date }}</td>
                                        <td class="msdColumn stylingclass">{{ $entry->msd }}</td>
                                        <td class="msdColumn stylingclass">{{ $entry->phone }}</td>
                                        <td class="msdColumn stylingclass">{{ $entry->cost_of_land }}</td>
                                        <td class="msdColumn stylingclass">{{ $entry->other_charges }}</td>
                                        <td class="msdColumn stylingclass">{{ $entry->bounder_wall_charges }}</td>
                                        <td class="msdColumn stylingclass">{{ $entry->balance }}</td>
                                        <td class="statusColumn stylingclass">
                                            @if ($entry->status)
                                                <span class="badge badge-success">Open</span>
                                            @else
                                                <span class="badge badge-warning">Cancelled</span>
                                            @endif
                                        </td>

                                        <td class="actionTable">
                                            <a href="entry/{{ $entry->id }}/edit">edit</a>
                                            |
                                            @if ($entry->status)
                                                <a href="entry/{{ $entry->id }}">Cancel file</a>
                                            @else
                                                <a href="entry/{{ $entry->id }}">Reopen file</a>
                                            @endif
                                            |
                                            <a href="{{ route('entry.print', $entry->id) }}" target="_blank">Print </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="printModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="printModalLabel">Print Selection</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="msCheck" name="msCheck" value="option1">
                        <label class="form-check-label" for="msCheck">Ms</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="plotCheck" name="plotCheck"
                            value="option1">
                        <label class="form-check-label" for="plotCheck">Plot</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="serialCheck" name="serialCheck"
                            value="option2">
                        <label class="form-check-label" for="serialCheck">S#</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="areaCheck" name="areaCheck"
                            value="option3">
                        <label class="form-check-label" for="areaCheck">A#</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="phaseCheck" name="phaseCheck"
                            value="option4">
                        <label class="form-check-label" for="phaseCheck">Phase</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="nameCheck" name="nameCheck"
                            value="option5">
                        <label class="form-check-label" for="nameCheck">Name</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="addressCheck" name="addressCheck"
                            value="option6">
                        <label class="form-check-label" for="addressCheck">Address</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="dateCheck" name="dateCheck"
                            value="option7">
                        <label class="form-check-label" for="dateCheck">Date</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="msdCheck" name="msdCheck" value="option8">
                        <label class="form-check-label" for="msdCheck">MSD</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="phoneCheck" name="phoneCheck"
                            value="option9">
                        <label class="form-check-label" for="phoneCheck">Phone</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="nicCheck" name="nicCheck" value="option9">
                        <label class="form-check-label" for="nicCheck">N.I.C</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="dpCheck" name="dpCheck" value="option9">
                        <label class="form-check-label" for="dpCheck">D/P</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="wpCheck" name="wpCheck" value="option9">
                        <label class="form-check-label" for="wpCheck">W/C</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="uptoCheck" name="uptoCheck"
                            value="option9">
                        <label class="form-check-label" for="uptoCheck">Upto</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="statusCheck" name="statusCheck"
                            value="option9">
                        <label class="form-check-label" for="statusCheck">Status</label>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" data-dismiss="modal" id="printbuttonall" class="btn btn-primary">Print
                        All</button>
                    <button type="button" data-dismiss="modal" id="printbutton" class="btn btn-primary">Print</button>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    td:hover {
        cursor: pointer;
    }
        @media print {
        .no-print {
            display: none;
        }
    }
</style>
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#entry-table').DataTable();
            $('#printbuttonall').on('click', function() {
                setTimeout(function() {
                    printfunction();
                    showAllColumns();
                }, 500);

            });


            $('#printbutton').on('click', function() {
                setTimeout(function() {
                    if ($('#nicCheck').is(":not(:checked)"))
                        $('.nicColumn').hide();

                    if ($('#msCheck').is(":not(:checked)"))
                        $('.msColumn').hide();

                    if ($('#areaCheck').is(":not(:checked)"))
                        $('.areaColumn').hide();

                    if ($('#plotCheck').is(":not(:checked)"))
                        $('.plotColumn').hide();

                    if ($('#serialCheck').is(":not(:checked)"))
                        $('.serialColumn').hide();



                    if ($('#phaseCheck').is(":not(:checked)"))
                        $('.phaseColumn').hide();

                    if ($('#nameCheck').is(":not(:checked)"))
                        $('.nameColumn').hide();

                    if ($('#addressCheck').is(":not(:checked)"))
                        $('.addressColumn').hide();

                    if ($('#dateCheck').is(":not(:checked)"))
                        $('.dateColumn').hide();

                    if ($('#msdCheck').is(":not(:checked)"))
                        $('.msdColumn').hide();

                    if ($('#phoneCheck').is(":not(:checked)"))
                        $('.phoneColumn').hide();

                    if ($('#statusCheck').is(":not(:checked)"))
                        $('.statusColumn').hide();

                    if ($('#dpCheck').is(":not(:checked)"))
                        $('.dpColumn').hide();

                    if ($('#wpCheck').is(":not(:checked)"))
                        $('.wpColumn').hide();

                    if ($('#uptoCheck').is(":not(:checked)"))
                        $('.uptoColumn').hide();

                    printfunction();
                    showAllColumns();
                }, 500);

            });

        });

        function showAllColumns() {

            $('.plotColumn').show();
            $('.serialColumn').show();
            $('.areaColumn').show();
            $('.phaseColumn').show();
            $('.nameColumn').show();
            $('.addressColumn').show();
            $('.dateColumn').show();
            $('.msdColumn').show();
            $('.dateColumn').show();
            $('.phoneColumn').show();
            $('.statusColumn').show();
            $('.nicColumn').show();
            $('.uptoColumn').show();
            $('.dpColumn').show();
            $('.wpColumn').show();
        }

        function printfunction() {
            $('#entry-table_info').hide();
            $('#entry-table_paginate').hide();
            $('#entry-table_filter').hide();
            $('#entry-table_length').hide();
            $('.btn-primary').hide();
            $('.card').css("border", "none");
            $('#actionTable').hide();
            $('.actionTable').hide();
            $('.page-footer').hide();
            $('.searchDiv').hide();

            $('.stylingclass').css({
                "border": "1px solid black",
                "font-weight": "bold"
            });


            window.print();
            $('.btn-primary').show();
            $('#entry-table_info').show();
            $('#entry-table_paginate').show();
            $('#entry-table_filter').show();
            $('#entry-table_length').show();
            $('.btn-primary').show();
            $('.card').css("border", "1px solid rgba(0, 0, 0, 0.125)");
            $('#actionTable').show();
            $('.actionTable').show();
            $('.page-footer').show();
            $('.searchDiv').show();
            $('.stylingclass').css({
                "border": "none",
                "font-weight": "normal"
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Handle select all checkbox
            document.getElementById('select-all').addEventListener('change', function(e) {
                const checkboxes = document.querySelectorAll('.select-row');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = e.target.checked;
                });
            });

            // Handle print selected button
            document.getElementById('print-selected').addEventListener('click', function() {
                const selectedRows = document.querySelectorAll('.select-row:checked');
                if (selectedRows.length === 0) {
                    alert('No rows selected');
                    return;
                }

                const ids = Array.from(selectedRows).map(row => row.getAttribute('data-id'));

                // Create a form to submit the selected IDs
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `{{ route('entry.printSelected') }}`;
                form.target = '_blank'; // Open in new tab

                // Add CSRF token
                const csrfToken = '{{ csrf_token() }}';
                const csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = csrfToken;
                form.appendChild(csrfInput);

                // Add selected IDs
                const idsInput = document.createElement('input');
                idsInput.type = 'hidden';
                idsInput.name = 'ids';
                idsInput.value = ids.join(','); // Convert array to comma-separated string
                form.appendChild(idsInput);

                document.body.appendChild(form);
                form.submit();
                document.body.removeChild(form);
            });

        });
    </script>
@endpush
