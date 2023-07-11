<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Support\Facades\DB; 
class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.form-project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   # Ainda nao finalizado
        Task::create($request->all());
        return redirect()->route('home');
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
    {   # Ainda nao finalizado
        $task = Task::where('id', $id)->first();
        $projecto = Project::all();
        if(!empty($task)){
            return view('forms.editTask', compact('task','projecto'));
        }
        else{
            return redirect()->route('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   # Ainda nao finalizado
        $data = [
            'name' =>$request->name,
            'assigned_to' =>$request->assigned_to,
            'deadline' =>$request->deadline,
            'progress' =>$request->progress,
            'project_id' =>$request->project_id,
            'tenant_id' =>$request->tenant_id,
        ];
        Task::where('id',$id)->update($data);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id); # Ainda nao finalizado
        DB::beginTransaction();
        #$task->assigned_to->delete();
        #$task->project->delete();
        $task->delete();
        DB::Commit();
        return redirect()->route('home');
    }
}
