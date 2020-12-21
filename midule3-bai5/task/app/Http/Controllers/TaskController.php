<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Session\Session;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.list', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tasks = new Task();
        $tasks->title = $request->input('title');
        $tasks->content = $request->input('content');

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $tasks->image = $path;
        }

        $tasks->due_date = $request->input('due_date');
        $tasks->save();

        Session::flash('success', 'tao moi thanh cong');

        return redirect()->route('tasks.index');
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
        $tasks = Task::findOrFail($id);

        return value('tasks.edit', compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tasks = Task::findOrFail($id);

        $tasks->title = $request->input('title');
        $tasks->content = $request->input('content');

        if ($request->hasFile('image')) {
            $currentImg = $tasks->image;
            if ($currentImg) {
                Storage::delete('/public/', $currentImg);
            }
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $tasks->image = $path;
        }

        $tasks->due_date = $request->input('due_date');
        $tasks->save();

        Session::flash('success', 'cap nhap thanh cong');

        return redirect()->route('tasks.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tasks = Task::findOrFail($id);

        $image = $tasks->image;

            if ($image) {
                Storage::delete('/public/' . $image);
            }

            $tasks->delete();

            Session::flash('success', 'xoa thanh cong');

            return redirect()->route('tasks.index');
    }
}
