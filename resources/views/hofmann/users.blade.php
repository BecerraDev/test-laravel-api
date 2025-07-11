@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Título principal -->
    <div class="text-center mb-4">
        <h2 class="fw-bold" style="font-family: 'Montserrat', sans-serif; color: #2C7A7B;">
            Registro de Usuarios
        </h2>
        <p class="text-muted" style="font-family: 'Public Sans', sans-serif; font-size: 1rem;">
            Administración y edición de datos de usuarios
        </p>
    </div>

    <!-- 📋 Tabla -->
   <div class="table-responsive rounded shadow-sm mt-4">
    <table class="table table-hover table-striped table-bordered align-middle mb-0">
<thead class="table-secondary " style="background-color: #4CAF50; color: white; text-align: center;">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Monto</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                @if (!request('filter_code') || $user['code'] === request('filter_code'))
                    <tr>
                        <td class="text-center fw-semibold">{{ $user['id'] }}</td>
                        <td class="text-center">
                            <span class="badge bg-success">{{ $user['code'] }}</span>
                        </td>
                        <td class="text-center fw-bold text-dark" style="font-family: monospace;">
                            ${{ number_format($user['amount'], 0, ',', '.') }}
                        </td>
                        <td class="text-center text-muted">
                            {{ \Carbon\Carbon::parse($user['date'])->format('d-m-Y') }}
                        </td>
                        <td class="text-center">
                            <button 
                                class="btn btn-sm btn-outline-primary"
                                onclick='openModal(@json($user))'
                                title="Editar usuario">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4 fst-italic">
                        No hay usuarios disponibles.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>


    <!-- Overlay de carga -->
    <div id="loadingOverlay" style="
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1100;
        display: flex;
        justify-content: center;
        align-items: center;
    ">
        <div class="spinner-border text-light" role="status" style="width: 4rem; height: 4rem;">
            <span class="visually-hidden">Cargando...</span>
        </div>
    </div>

    <!-- 🧾 MODAL de edición -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <form id="userForm" class="modal-content shadow-lg rounded-4 border-0" style="font-family: 'Public Sans', sans-serif;">
                @csrf
                <div class="modal-header bg-primary text-white rounded-top-4">
                    <h5 class="modal-title fw-bold">Editar Usuario</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body p-4">
                    <input type="hidden" id="id" name="id">

                    <div class="mb-3">
                        <label for="code" class="form-label fw-semibold">Código</label>
                        <select id="code" name="code" class="form-select shadow-sm" style="transition: box-shadow 0.3s;">
                            @foreach ($codes as $c)
                                <option value="{{ $c['code'] }}">{{ $c['code'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="amount" class="form-label fw-semibold">Monto</label>
                        <input type="number" id="amount" name="amount" class="form-control shadow-sm" required>
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label fw-semibold">Fecha</label>
                        <input type="date" id="date" name="date" class="form-control shadow-sm" required>
                    </div>

                    <div class="mb-3">
                        <label for="github" class="form-label fw-semibold">GitHub</label>
                        <input type="url" id="github" name="github" class="form-control shadow-sm" placeholder="https://github.com/tuusuario" required>
                    </div>
                </div>
                <div class="modal-footer border-0 px-4 pb-4 pt-0">
                    <button type="submit" class="btn btn-success fw-semibold shadow-sm">Enviar</button>
                    <button type="button" class="btn btn-outline-secondary fw-semibold" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>

</div>

<!--Scripts Modals -->
@include('hofmann.users-scripts')

@endsection
