<?php

namespace App\Modules\EmailMarketing\Controllers\Backend;

use App\Imports\EmailMarketingImport;
use App\Models\EmailMarketing;
use App\Modules\EmailMarketing\Request\EmailMarketingRequest;
use DataTables;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmailMarketingController extends \App\Http\Controllers\AdminController
{
    protected $repo_service;

    public $module = 'EmailMarketing';

    public $view = 'Emails.';

    public function __construct(\App\Modules\EmailMarketing\Respository\EmailMarketingRespository $blog_respository)
    {
        $this->repo_service = $blog_respository;
    }

    public function index()
    {
        if (true !== (isAdmin() || (bool) getAuth()->can(\Perms::$BLOG['LIST']))) {
            abort(403, "You don't have permission to view this page");
        }

        return view(admin_module_view($this->view.'manage', $this->module));
    }

    public function ajaxManageable(Request $request)
    {
        $sort_cols = getColsByDataable($request->input('columns'), 'action');
        $order_cols = ($sort_cols[$request->input('order.0.column')] ?? 'created_at');
        $order_by = ($request->input('order.0.dir') ?: 'desc');

        $data = EmailMarketing::orderBy($order_cols, $order_by)->orderByDesc('updated_at');

        return Datatables::of($data)
            ->addColumn('action', function ($row) {

                $action = '';
                if (isAdmin() || getAuth()->can(\Perms::$BLOG['UPDATE'])) {
                    $action .= '<a href="'.route(admin_route('email-marketing.edit'), [$row->id]).'" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a> ';
                }

                if (isAdmin() || getAuth()->can(\Perms::$BLOG['DELETE'])) {
                    $action .= '<a href="javascript:void(0)" data-href="'.route(admin_route('email-marketing.delete'), [$row->id]).'" class="btn btn-danger btn-sm const-del-records"><i class="fas fa-trash"></i></a>';
                }

                if ($row->post_url) {
                    $action .= ' <a href="'.$row->post_url.'" target="_blank" class="btn btn-info btn-sm "><i class="fas fa-desktop"></i></a>';
                }

                return $action ?: '-';
            })
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return admin_datetime_format($row->created_at, true);
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (true !== (isAdmin() || (bool) getAuth()->can(\Perms::$BLOG['ADD']))) {
            abort(403, "You don't have permission to view this page");
        }

        return view(admin_module_view($this->view.'form', $this->module));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailMarketingRequest $request)
    {
        $this->repo_service->createOrUpdate($request, new EmailMarketing);

        // Redirection when you choose button
        $route_action = route(admin_route($request->formsubmit));

        $request->session()->flash('alert-message', [
            'status' => 'success',
            'message' => 'Record has been successfully added',
        ]);

        return redirect($route_action);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($find_id)
    {
        if (true !== (isAdmin() || (bool) getAuth()->can(\Perms::$BLOG['UPDATE']))) {
            abort(403, "You don't have permission to view this page");
        }

        $data = EmailMarketing::findOrFail($find_id);

        return view(admin_module_view($this->view.'form', $this->module), compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmailMarketingRequest $request, $find_id)
    {
        $model = EmailMarketing::findOrFail($find_id);

        $this->repo_service->createOrUpdate($request, $model);

        $request->session()->flash('alert-message', [
            'status' => 'success',
            'message' => 'Record has been successfully updated',
        ]);

        return redirect()->route(admin_route('email-marketing.index'));
    }

    public function destroy(Request $request, $id)
    {
        if (true !== (isAdmin() || (bool) getAuth()->can(\Perms::$BLOG['DELETE']))) {
            abort(403, "You don't have permission to view this page");
        }

        $delete = EmailMarketing::findOrFail($id);
        $delete->delete();

        $request->session()->flash('alert-message', [
            'status' => 'success',
            'message' => 'Record has been successfully deleted',
        ]);

        return redirect(route(admin_route('email-marketing.index')));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new EmailMarketingImport, $request->file('file'));

        return back()->with('success', 'Excel file imported successfully.');
    }
}
