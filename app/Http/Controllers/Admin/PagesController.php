<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PageRequest;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();

		return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
    	//TODO: need to show user message about db error
		if(!Page::create($request->all()))
			return abort(503);

		return redirect()->action('Admin\PagesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		//TODO: need to show user message about db error
		$page = Page::findOrFail($id);
    	if(!$page)
    		return abort(503);

        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $request, $id)
    {
		//TODO: need to show user message about db error
		$page = Page::findOrFail($id);
		if(!$page)
			return abort(503);

		$page->update($request->all());

		return redirect()->action('Admin\PagesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		//TODO: need to show user message about db error
		if(!Page::destroy($id))
			return abort(503);

		return redirect()->action('Admin\PagesController@index');
    }
}
