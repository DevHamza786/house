<?php

namespace App\DataTables;

use App\Entry;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EntryDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('created_at', function (Entry $entry) {
                return $entry->created_at->format('d M Y');
            })
            ->rawColumns(['created_at'])
            ->setRowId('id');
    }

    public function query(Entry $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('entry-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('rt' . "<'row'<'col-sm-12 col-md-1'l><'col-sm-12 col-md-11'p>>")
            ->addTableClass('table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer text-gray-600 fw-semibold')
            ->parameters([
                'order' => [1, 'asc'],
                'language' => [
                    'paginate' => [
                        'previous' => '<<',
                        'next' => '>>'
                    ]
                ],
                'initComplete' => 'function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var input = document.createElement("input");
                        $(input).appendTo($(column.footer()).empty())
                            .on("change", function () {
                                column.search($(this).val(), false, false, true).draw();
                            });
                    });
                }'
            ]);
    }

    protected function getColumns(): array
    {
        return [
            Column::make('name'),
            Column::make('created_at'),
        ];
    }

    protected function filename()
    {
        return 'Entry_' . date('YmdHis');
    }
}
