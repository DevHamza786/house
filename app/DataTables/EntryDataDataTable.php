<?php

namespace App\DataTables;


use App\Entry;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Collection;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EntryDataDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query instanceof Collection ? $query : $query->get())
            ->addColumn('created_at', function (Entry $entry) {
                return $entry->created_at->format('d M Y');
            })
            ->rawColumns(['created_at'])
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Entry $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Entry $model)
    {
        // Enable query logging
        \DB::enableQueryLog();

        // Get the query
        $query = $model->newQuery();

        // Log the query
        info('EntryDataTable Query: ' . $query->toSql());

        return $query;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
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
    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')->title('Tran No'),
        ];
    }

    public function table()
    {
        return $this->builder()->columns($this->getColumns());
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'EntryData_' . date('YmdHis');
    }
}
