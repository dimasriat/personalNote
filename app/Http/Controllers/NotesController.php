<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$notes = Note::all();
		return view('notes.index', ["notes" => $notes]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('notes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$newNote = new Note();
		$newNote->title = $request->title;
		$newNote->content = $request->content;
		$newNote->save();
		return redirect("/");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Note  $note
	 * @return \Illuminate\Http\Response
	 */
	public function show(Note $note)
	{
		return view('notes.show', ["note" => $note]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Note  $note
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Note $note)
	{
		return view('notes.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\Note  $note
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Note $note)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Note  $note
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Note $note)
	{
		//
	}
}
