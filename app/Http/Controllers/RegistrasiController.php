<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Registrasi;
use Illuminate\Http\Request;
use Session;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $registrasi = Registrasi::paginate(25);

        return view('admin.registrasi.index', compact('registrasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.registrasi.create');
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
        
        Registrasi::create($requestData);

        Session::flash('flash_message', 'Registrasi added!');

        return redirect('admin/registrasi');
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
        $registrasi = Registrasi::findOrFail($id);

        return view('admin.registrasi.show', compact('registrasi'));
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
        $registrasi = Registrasi::findOrFail($id);

        return view('admin.registrasi.edit', compact('registrasi'));
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
        
        $registrasi = Registrasi::findOrFail($id);
        $registrasi->update($requestData);

        Session::flash('flash_message', 'Registrasi updated!');

        return redirect('admin/registrasi');
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
        Registrasi::destroy($id);

        Session::flash('flash_message', 'Registrasi deleted!');

        return redirect('admin/registrasi');
    }
}
