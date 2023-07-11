<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocatarioRequest;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Stancl\Tenancy\Database\Models\Domain as DomainModel;
use Yajra\DataTables\Facades\DataTables;

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
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $ies = Tenant::with('domains')->get();
            // dd(Tenant::with('domains')->get());
            dd($ies[0]->domains[0]->domain);
            
            return DataTables::of($ies)->make(true);
        }
        return view('Admin.index');
    }


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
    public function store(StoreLocatarioRequest $request)
    {
        $tenant = Tenant::create([
            'name'        => $request->name,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        dd($tenant->id);
        // $domainModel = new DomainModel();
        // $domainModel->domain = $request->domain;
        // dd();
        // try {
        //     

            

        //     // $tenant->createDomain($request->domain);
        //     $domainModel = new DomainModel();
        //     $domainModel->domain = $request->domain;
        //     $domainModel->tenant_id = $tenant->id;

        // } catch (\Throwable $th) {
        //     return redirect()->back()->withErrors($th->getMessage());
        // }

        // dd($tenant->id);

        // return redirect()->back()->with('success', 'IES criada com sucesso');
    }


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
    //     $tenant = $this->->show($id);
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
    //     return redirect()->back()->with('success', 'IES actualizada com sucesso');
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
    //             'message' => 'Erro ao excluir a IES!',
    //             'success' => false
    //         ], 422);
    //     }
    //     return response()->json([
    //         'message' => 'IES excluída com sucesso!',
    //         'success' => true
    //     ], 200);
    // }

}
