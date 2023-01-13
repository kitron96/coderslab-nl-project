<?php

namespace App\DataTables;

use App\Models\Award;
use App\Models\Notice;
use App\Scopes\ActiveScope;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;

class AwardDataTable extends BaseDataTable
{

    private $manageAwardPermission;

    public function __construct()
    {
        parent::__construct();
        $this->manageAwardPermission = user()->permission('manage_award');
    }

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('check', function ($row) {
                return '<input type="checkbox" class="select-table-row" id="datatable-row-' . $row->id . '"  name="datatable_ids[]" value="' . $row->id . '" onclick="dataTableRowCheck(' . $row->id . ')">';
            })
            ->addColumn('action', function ($row) {

                $action = '<div class="task_view">
                    <div class="dropdown">
                        <a class="task_view_more d-flex align-items-center justify-content-center dropdown-toggle" type="link"
                            id="dropdownMenuLink-' . $row->id . '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-options-vertical icons"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-' . $row->id . '" tabindex="0">';

                $action .= '<a href="' . route('awards.show', $row->id) . '" class="dropdown-item openRightModal" ><i class="fa fa-eye mr-2"></i>' . __('app.view') . '</a>';

                if ($this->manageAwardPermission == 'all')
                {
                    $action .= '<a class="dropdown-item openRightModal" href="' . route('awards.edit', [$row->id]) . '">
                                <i class="fa fa-edit mr-2"></i>
                                ' . trans('app.edit') . '
                            </a>';
                    $appreciationCount = 0;

                    if(!is_null($row->appreciations)){
                        $appreciationCount = $row->appreciations->count();
                    }

                    $action .= '<a class="dropdown-item delete-table-row" data-status="'.$row->status.'" data-total-appreciation="'.$appreciationCount.'" href="javascript:;" data-user-id="' . $row->id . '">
                                <i class="fa fa-trash mr-2"></i>
                                ' . trans('app.delete') . '
                            </a>';
                }

                $action .= '</div>
                    </div>
                </div>';

                return $action;
            })
            ->editColumn('status', function ($row) {
                if ($this->manageAwardPermission == 'all') {
                    $status = '<select class="form-control select-picker change-appreciation-status" data-appreciation-id="' . $row->id . '">';
                    $status .= '<option ';

                    if ($row->status == 'active') {
                        $status .= 'selected';
                    }

                    $status .= 'value="active" data-content="<i class=\'fa fa-circle mr-2 text-light-green\'></i> ' .  __('app.active') . '">' . __('app.active')  . '</option>';
                    $status .= '<option ';

                    if ($row->status == 'inactive') {
                        $status .= 'selected';
                    }

                    $status .= ' value="inactive" data-content="<i class=\'fa fa-circle mr-2 text-red\'></i> ' .  __('app.inactive') . '">' . __('app.inactive')  . '</option>';

                    $status .= '</select>';

                }

                else {
                    if ($row->status == 'active') {
                        $class = 'text-light-green';
                        $status = __('app.active');
                    }

                    else {
                        $class = 'text-red';
                        $status = __('app.inactive');
                    }

                    $status = '<i class="fa fa-circle mr-1 ' . $class . ' f-10"></i> ' . $status;
                }

                return $status;

            })

            ->addColumn('appreciation_status', function ($row) {
                return ucfirst($row->status);
            })
            ->editColumn(
                'award_icon_id',
                function ($row) {
                    return '<div class="position-relative" data-toggle="tooltip" data-original-title="">
                        <i class="bi bi-'.$row->awardIcon->icon.' f-15 text-white position-absolute appreciation-icon"></i>
                        <i class="bi bi-hexagon-fill fs-40" style="color: '.$row->color_code.'"></i>
                    </div>';
                }
            )
            ->editColumn(
                'title',
                function ($row) {
                    return ucwords($row->title);
                }
            )
            ->addIndexColumn()
            ->smart(false)
            ->setRowId(function ($row) {
                return 'row-' . $row->id;
            })
            ->rawColumns(['check','status', 'action', 'award_icon_id']);
    }

    /***
     * @param Notice $model
     * @return \Illuminate\Database\Query\Builder
     */
    public function query(Award $model)
    {
        $model = $model->withoutGlobalScope(ActiveScope::class)->with(['awardIcon', 'appreciations'])->select('id', 'award_icon_id', 'title', 'color_code', 'status');

        if (request()->searchText != '') {
            $model->where(function ($query) {
                $query->orWhere('title', 'like', '%' . request('searchText') . '%');
                $query->orWhere('status', 'like', '%' . request('searchText') . '%');
            });
        }

        if (request()->status != '' && request()->status != 'all') {
            $model->where('status', request()->status);
        }

        return $model;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('appreciation-type-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(3)
            ->destroy(true)
            ->responsive(true)
            ->serverSide(true)
            ->stateSave(true)
            ->processing(true)
            ->dom($this->domHtml)

            ->language(__('app.datatable'))
            ->parameters([
                'initComplete' => 'function () {
                   window.LaravelDataTables["appreciation-type-table"].buttons().container()
                    .appendTo("#table-actions")
                }',
                'fnDrawCallback' => 'function( oSettings ) {
                    $("body").tooltip({
                        selector: \'[data-toggle="tooltip"]\'
                    });
                    $(".change-appreciation-status").selectpicker();
                }',
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
            'check' => [
                'title' => '<input type="checkbox" name="select_all_table" id="select-all-table" onclick="selectAllTable(this)">',
                'exportable' => false,
                'orderable' => false,
                'searchable' => false
            ],
            '#' => ['data' => 'DT_RowIndex', 'orderable' => false, 'searchable' => false, 'visible' => false],
            __('modules.appreciations.icon')  => ['data' => 'award_icon_id', 'exportable' => false, 'name' => 'award_icon_id', 'searchable' => false],
            __('app.title')  => ['data' => 'title', 'name' => 'title', 'searchable' => true],
            Column::computed('status', __('app.status'))
                ->exportable(false)
                ->orderable(true)
                ->width(150),
            __('modules.appreciations.appreciationStatus')  => ['data' => 'appreciation_status', 'visible' => false, 'name' => 'appreciation_status'],
            Column::computed('action', __('app.action'))
                ->exportable(false)
                ->printable(false)
                ->orderable(false)
                ->searchable(false)
                ->addClass('text-right pr-20')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'appreciations_' . date('YmdHis');
    }

    public function pdf()
    {
        set_time_limit(0);

        if ('snappy' == config('datatables-buttons.pdf_generator', 'snappy')) {
            return $this->snappyPdf();
        }

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('datatables::print', ['data' => $this->getDataForPrint()]);

        return $pdf->download($this->getFilename() . '.pdf');
    }

}
