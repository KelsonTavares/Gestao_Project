<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $escritorios = $this->tenantService->getModelsTenant()->with('domains')->get();

    //         return DataTables::of($escritorios)->make(true);
    //     }
    //     return view('Admin.index');
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreEscritorioRequest $request): RedirectResponse
    // {
    //     //
    //     try {
    //         $tenant = new Tenant();
    //         $tenant->name = $request->name;
    //         $tenant->status = $request->status;
    //         $tenant->description = $request->description;
    //         $tenant =  $this->tenantService->store($tenant);
    //         $tenant->domains()->create($request->except(['name', 'status', 'description']));
    //     } catch (\Throwable $th) {
    //         //throw $th;
    //         return redirect()->back()->withErrors($th->getMessage());
    //     }
    //     return redirect()->back()->with('success', 'Escritorio creado com sucesso');
    // }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Admin.show');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id): View
    // {
    //     $tenant = $this->tenantService->show($id);
    //     return view('Admin.edit', compact('tenant'));
    // }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateEscritorioRequest $request, $id): RedirectResponse
    // {
    //     //
    //     try {

    //         $tenant = new Tenant();
    //         $tenant->name = $request->name;
    //         $tenant->status = $request->status;
    //         $tenant->description = $request->description ?? "";
    //         $this->tenantService->update($id, $tenant);
    //         $this->tenantService->getModelsTenant()->find($id)->domains->first()->update(['domain' => $request->domain]);
    //     } catch (\Throwable $th) {
    //         return redirect()->back()->with('error', $th->getMessage());
    //     }
    //     return redirect()->back()->with('success', 'Escritorio actualizado com sucesso');
    // }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     try {
    //         $this->tenantService->delete($id);
    //     } catch (\Throwable $th) {
    //         return response()->json([
    //             'message' => 'Erro ao excluir o escritorio!',
    //             'success' => false
    //         ], 422);
    //     }
    //     return response()->json([
    //         'message' => 'escritorio excluido com sucesso!',
    //         'success' => true
    //     ], 200);
    // }

}
