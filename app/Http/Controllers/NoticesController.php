<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrepareNoticeRequest;
use App\Provider;

class NoticesController extends Controller
{
    /**
     * Create a new notices controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all notices.
     *
     * @return [type] [description]
     */
    public function index()
    {
        return view('notices.index');
    }

    /**
     * Show a page to create a new notice.
     *
     * @return \Response
     */
    public function create()
    {
        // get list of providers
        $providers = Provider::lists('name', 'id');

        // load a view to create a new notice
        return view('notices.create', compact('providers'));
    }

    public function confirm(PrepareNoticeRequest $request)
    {
        dd($request->all());
    }
}
