<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.frontend.index', ['tasks' => Task::all()]);
    }

    public function create()
    {
        return view('tasks.frontend.create');
    }

    public function store(TaskFormRequest $request)
    {
        $task = new Task();
        $task->fill($request->validated());

        if ($request->hasFile('image')) {
            $fileExtension = $request->image->getClientOriginalExtension();
            $fileName = hexdec(uniqid('', false));

            $task->image = "$fileName.$fileExtension";

            $request->file('image')->storeAs('public/images/task', $task->image);
        }

        $task->save();

        return redirect()->route('tasks.index')->with('success', Lang::get('create success'));
    }

    public function show(Task $task)
    {
        //
    }

    public function edit(Task $task)
    {
        return view('tasks.frontend.edit', compact('task'));
    }

    public function update(TaskFormRequest $request, Task $task)
    {
        $task->fill($request->validated());

        if ($request->hasFile('image')) {
            if (!empty($task->image) && Storage::exists('public/images/task/' . $task->image)) {
                Storage::delete('public/images/task/' . $task->image);
            }

            $fileExtension = Str::lower($request->image->getClientOriginalExtension());
            $fileName = hexdec(uniqid('', false));
            $task->image = "$fileName.$fileExtension";

            $request->file('image')->storeAs('public/images/task', $task->image);
        }

        $task->save();

        return redirect()->route('tasks.index')->with('success', Lang::get('updated success'));
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', Lang::get('delete success success'));
    }
}
