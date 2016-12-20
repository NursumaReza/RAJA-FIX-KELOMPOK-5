<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Nilai;
use Illuminate\Http\Request;
use Session;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $nilai = Nilai::paginate(25);

        return view('admin.nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.nilai.create');
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
        
        Nilai::create($requestData);

        Session::flash('flash_message', 'Nilai added!');

        return redirect('admin/nilai');
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
        $nilai = Nilai::findOrFail($id);

        return view('admin.nilai.show', compact('nilai'));
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
        $nilai = Nilai::findOrFail($id);

        return view('admin.nilai.edit', compact('nilai'));
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
        
        $nilai = Nilai::findOrFail($id);
        $nilai->update($requestData);

        Session::flash('flash_message', 'Nilai updated!');

        return redirect('admin/nilai');
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
        Nilai::destroy($id);

        Session::flash('flash_message', 'Nilai deleted!');

        return redirect('admin/nilai');
    }
}
