<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class projectoController extends Controller
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
    {
        Project::create($request->all());
        return redirect()->route('project-details');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $projecto = Project::where('id', $id)->first();

        if(!empty($projecto)){
            return view('forms.form-edit', compact('projecto'));
        }
        else{
            return redirect()->route('project-details');
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
    {   
        $data = [
            'name' =>$request->name,
            'user_id' =>$request->user_id,
            'deadline' =>$request->deadline,
            'budget' =>$request->budget,
            'comments' =>$request->comments,
            'description' =>$request->description,
        ];
        Project::where('id',$id)->update($data);
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
        $projecto = Project::find($id);
        DB::beginTransaction();
        $projecto->user->delete();
        $projecto->delete();
        DB::Commit();
        return redirect()->route('home');
    }
}
