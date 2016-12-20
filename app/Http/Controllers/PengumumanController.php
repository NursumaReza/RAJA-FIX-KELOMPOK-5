<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pengumuman;
use Illuminate\Http\Request;
use Session;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pengumuman = Pengumuman::paginate(25);

        return view('admin.pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pengumuman.create');
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
        
        Pengumuman::create($requestData);

        Session::flash('flash_message', 'Pengumuman added!');

        return redirect('admin/pengumuman');
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
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.show', compact('pengumuman'));
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
        $pengumuman = Pengumuman::findOrFail($id);

        return view('admin.pengumuman.edit', compact('pengumuman'));
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
        
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->update($requestData);

        Session::flash('flash_message', 'Pengumuman updated!');

        return redirect('admin/pengumuman');
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
        Pengumuman::destroy($id);

        Session::flash('flash_message', 'Pengumuman deleted!');

        return redirect('admin/pengumuman');
    }
}
