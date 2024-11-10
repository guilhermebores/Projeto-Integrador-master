<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('services.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'description' => 'nullable|string',
            'arrival_date' => 'required|date',
            'delivery_date' => 'nullable|date|after_or_equal:arrival_date',
        ]);
    
        Service::create($request->all());
    
        return redirect()->route('services.index')->with('success', 'Serviço cadastrado com sucesso!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
{
    return view('services.edit', compact('service'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'company_name' => 'required',
            'description' => 'nullable|string',
            'arrival_date' => 'required|date',
            'delivery_date' => 'nullable|date|after_or_equal:arrival_date',
        ]);
    
        $service->update($request->all());
    
        return redirect()->route('services.index')->with('success', 'Serviço atualizado com sucesso!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
    
        return redirect()->route('services.index')->with('success', 'Serviço excluído com sucesso!');
    }

    public function markAsDelivered(Service $service)
{
    

    $service->update(['is_delivered' => true]); // Atualiza o campo is_delivered para true

    return redirect()->route('services.index')->with('success', 'Serviço marcado como entregue!');
}

}

    

