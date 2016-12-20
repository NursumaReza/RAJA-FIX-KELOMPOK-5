<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Mahasiswa;
use Illuminate\Http\Request;
use Session;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(25);

        return view('admin.mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
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
        
        Mahasiswa::create($requestData);

        Session::flash('flash_message', 'Mahasiswa added!');

        return redirect('admin/mahasiswa');
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
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('admin.mahasiswa.show', compact('mahasiswa'));
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
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('admin.mahasiswa.edit', compact('mahasiswa'));
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
        
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($requestData);

        Session::flash('flash_message', 'Mahasiswa updated!');

        return redirect('admin/mahasiswa');
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
        Mahasiswa::destroy($id);

        Session::flash('flash_message', 'Mahasiswa deleted!');

        return redirect('admin/mahasiswa');
    }
}
