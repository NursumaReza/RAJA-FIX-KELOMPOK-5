<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DosenPembimbing;
use Illuminate\Http\Request;
use Session;

class DosenPembimbingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dosenpembimbing = DosenPembimbing::paginate(25);

        return view('admin.dosenpembimbing.index', compact('dosenpembimbing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.dosenpembimbing.create');
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
        
        DosenPembimbing::create($requestData);

        Session::flash('flash_message', 'DosenPembimbing added!');

        return redirect('admin/dosenpembimbing');
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
        $dosenpembimbing = DosenPembimbing::findOrFail($id);

        return view('admin.dosenpembimbing.show', compact('dosenpembimbing'));
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
        $dosenpembimbing = DosenPembimbing::findOrFail($id);

        return view('admin.dosenpembimbing.edit', compact('dosenpembimbing'));
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
        
        $dosenpembimbing = DosenPembimbing::findOrFail($id);
        $dosenpembimbing->update($requestData);

        Session::flash('flash_message', 'DosenPembimbing updated!');

        return redirect('admin/dosenpembimbing');
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
        DosenPembimbing::destroy($id);

        Session::flash('flash_message', 'DosenPembimbing deleted!');

        return redirect('admin/dosenpembimbing');
    }
}
