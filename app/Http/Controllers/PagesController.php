<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function show($slug)
	{
		$page = Page::where(['slug' => $slug])->first();

		return view('pages.show', compact('page'));
	}
}
