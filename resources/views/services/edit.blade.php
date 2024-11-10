@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-light mb-4">Editar Serviço</h1>
    
    <form action="{{ route('services.update', $service->id) }}" method="POST" class="bg-dark p-4 rounded shadow modern-border">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="company_name" class="form-label text-light">Nome da Empresa:</label>
            <input type="text" name="company_name" id="company_name" class="form-control bg-secondary text-light border border-light rounded p-2" placeholder="Digite o nome da empresa" required>
        </div>

        <div class="mb-3">

            <label for="description" class="form-label text-light">Descrição do Serviço:</label>
            <textarea name="description" id="description" class="form-control bg-secondary text-light border border-light rounded p-2" rows="4" placeholder="Descrição do serviço"></textarea>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="arrival_date" class="form-label text-light">Data de Chegada:</label>
                <input type="date" name="arrival_date" id="arrival_date" class="form-control bg-secondary text-light border border-light rounded p-2" required>
            </div>
            <div class="col-md-6">
                <label for="delivery_date" class="form-label text-light">Data de Entrega:</label>
                <input type="date" name="delivery_date" id="delivery_date" class="form-control bg-secondary text-light border border-light rounded p-2">
            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success px-4 py-2 rounded-pill btn-dark-modern btn-dark-modern:hover btn-dark-modern:focus">Salvar</button>
            <a href="{{ route('services.index') }}" class="btn-dark-modern btn-dark-modern:hover btn-dark-modern:focus">Cancelar</a>
        </div>
    </form>
</div>
@endsection
