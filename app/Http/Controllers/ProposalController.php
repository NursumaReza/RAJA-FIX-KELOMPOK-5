<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Proposal;
use Illuminate\Http\Request;
use Session;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $proposal = Proposal::paginate(25);

        return view('admin.proposal.index', compact('proposal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.proposal.create');
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
        
        Proposal::create($requestData);

        Session::flash('flash_message', 'Proposal added!');

        return redirect('admin/proposal');
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
        $proposal = Proposal::findOrFail($id);

        return view('admin.proposal.show', compact('proposal'));
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
        $proposal = Proposal::findOrFail($id);

        return view('admin.proposal.edit', compact('proposal'));
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
        
        $proposal = Proposal::findOrFail($id);
        $proposal->update($requestData);

        Session::flash('flash_message', 'Proposal updated!');

        return redirect('admin/proposal');
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
        Proposal::destroy($id);

        Session::flash('flash_message', 'Proposal deleted!');

        return redirect('admin/proposal');
    }
}
