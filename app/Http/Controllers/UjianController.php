<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Ujian;
use Illuminate\Http\Request;
use Session;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $ujian = Ujian::paginate(25);

        return view('admin.ujian.index', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.ujian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Ujian::create($requestData);

        Session::flash('flash_message', 'Ujian added!');

        return redirect('admin/ujian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ujian = Ujian::findOrFail($id);

        return view('admin.ujian.show', compact('ujian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $ujian = Ujian::findOrFail($id);

        return view('admin.ujian.edit', compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $ujian = Ujian::findOrFail($id);
        $ujian->update($requestData);

        Session::flash('flash_message', 'Ujian updated!');

        return redirect('admin/ujian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Ujian::destroy($id);

        Session::flash('flash_message', 'Ujian deleted!');

        return redirect('admin/ujian');
    }
}
