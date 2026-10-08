<div class="flex-grow-1">
    <nav class="navbar navbar-light bg-white px-4 border-bottom" style="height: 74px;">
        <div class="container-fluid p-0 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">Ambientes</h5>

            <a href="{{ route('ambiente.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-lg me-1"></i>
                Novo ambiente
            </a>
        </div>
    </nav>

    <div class="p-4 p-md-5">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert">
            </button>
        </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Lista de ambientes</h2>
                <p class="text-muted mb-0">
                    Gerencie os ambientes cadastrados.
                </p>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">#</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Status</th>
                                <th class="text-end pe-4">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($ambientes as $ambiente)
                            <tr>
                                <td>{{ $ambiente->id }}</td>
                                <td>{{ $ambiente->nome }}</td>
                                <td>{{ $ambiente->descricao ?? 'Sem descrição' }}</td>
                                <td>{{ $ambiente->status }}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $ambiente->id }})"
                                        wire:confirm="Deseja excluir este ambiente?">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">
                                    Nenhum ambiente cadastrado.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>