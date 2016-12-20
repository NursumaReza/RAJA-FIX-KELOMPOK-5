<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Hasil;
use Illuminate\Http\Request;
use Session;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $hasil = Hasil::paginate(25);

        return view('admin.hasil.index', compact('hasil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.hasil.create');
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
        
        Hasil::create($requestData);

        Session::flash('flash_message', 'Hasil added!');

        return redirect('admin/hasil');
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
        $hasil = Hasil::findOrFail($id);

        return view('admin.hasil.show', compact('hasil'));
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
        $hasil = Hasil::findOrFail($id);

        return view('admin.hasil.edit', compact('hasil'));
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
        
        $hasil = Hasil::findOrFail($id);
        $hasil->update($requestData);

        Session::flash('flash_message', 'Hasil updated!');

        return redirect('admin/hasil');
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
        Hasil::destroy($id);

        Session::flash('flash_message', 'Hasil deleted!');

        return redirect('admin/hasil');
    }
}
