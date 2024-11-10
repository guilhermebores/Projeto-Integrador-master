@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

@section('title', 'Serviços')

@section('content')
<div class="card">
    <div class="card-header">Serviços Cadastrados</div>
    <div class="card-body">
        <a href="{{ route('services.create') }}"
            class="btn-dark-modern btn-dark-modern:hover btn-dark-modern:focus ">Adicionar Serviço</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome da Empresa</th>
                    <th>Descrição</th>
                    <th>Data de Chegada</th>
                    <th>Data de Entrega</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                <tr class="{{ $service->is_delivered ? 'table-success' : '' }}">
                    <td>{{ $service->company_name }}</td>
                    <td>{{ $service->description }}</td>
                    <td>{{ $service->arrival_date }}</td>
                    <td>{{ $service->delivery_date }}</td>
                    <td>{{ $service->is_delivered ? 'Entregue' : 'Pendente' }}</td>
                    <td>
                        <a class="btn-dark-modern" href={{ route('services.edit', $service->id) }}>Editar</a>

                        <form action="{{ route('services.destroy', $service->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn-dark-modern btn-dark-modern:hover btn-dark-modern:focus"
                                type="submit">Excluir</button>
                        </form>
                        <form action="{{ route('services.markAsDelivered', $service->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('PATCH')

                            @if (!$service->is_delivered)
                            <!-- Verifica se o serviço não está entregue -->
                            <button type="submit" class="btn btn-success btn-dark-modern"
                                {{ $service->is_delivered ? 'disabled' : '' }}>Marcar como Entregue</button>
                            @endif
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
