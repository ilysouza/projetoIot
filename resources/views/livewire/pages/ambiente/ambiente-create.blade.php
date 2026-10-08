<div class="flex-grow-1">
    <nav class="navbar navbar-light bg-white px-4 border-bottom" style="height: 74px;">
        <div class="container-fluid p-0 d-flex justify-content-between align-items-center">
            <div style="width: 350px;">
                <div class="input-group">
                    <span class="input-group-text bg-light border-0 rounded-start-pill ps-3">
                        <i class="bi bi-search"></i>
                    </span>

                    <input type="text" class="form-control bg-light border-0 rounded-end-pill shadow-none"
                        placeholder="Pesquisar...">
                </div>
            </div>

            <div class="d-flex align-items-center gap-4">
                <i class="bi bi-bell fs-5 text-secondary"></i>

                <div class="text-end d-none d-sm-block">
                    <div class="fw-bold">Usuário</div>
                    <small class="text-muted">usuario@email.com</small>
                </div>

                <a href="/login" class="text-secondary fs-5">
                    <i class="bi bi-box-arrow-right"></i>
                </a>
            </div>
        </div>
    </nav>

    <div class="p-4 p-md-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-1">Novo ambiente</h2>
                <p class="text-muted mb-0">
                    Cadastre um novo ambiente no sistema.
                </p>
            </div>

            <a href="{{ route('ambiente.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-1"></i>
                Voltar
            </a>
        </div>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}

            <button type="button" class="btn-close" data-bs-dismiss="alert">
            </button>
        </div>
        @endif

        <div class="card border-0 shadow rounded-4">
            <div class="card-body p-4">
                <form wire:submit="store">
                    <div class="mb-3">
                        <label for="nome" class="form-label fw-semibold">
                            Nome
                        </label>

                        <input type="text" id="nome" wire:model="nome"
                            class="form-control @error('nome') is-invalid @enderror"
                            placeholder="Ex.: Sala de reuniões">

                        @error('nome')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label fw-semibold">
                            Descrição
                        </label>

                        <textarea id="descricao" wire:model="descricao" rows="4"
                            class="form-control @error('descricao') is-invalid @enderror"
                            placeholder="Descreva o ambiente"></textarea>

                        @error('descricao')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="status" class="form-label fw-semibold">
                            Status
                        </label>

                        <select id="status" wire:model="status"
                            class="form-select @error('status') is-invalid @enderror">
                            <option value="">Selecione</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>

                        @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('ambiente.index') }}" class="btn btn-light">
                            Cancelar
                        </a>

                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                            <span wire:loading.remove>
                                <i class="bi bi-check-lg me-1"></i>
                                Cadastrar
                            </span>

                            <span wire:loading>
                                Salvando...
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>