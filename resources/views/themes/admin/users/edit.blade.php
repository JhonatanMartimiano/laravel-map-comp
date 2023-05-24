<x-themes.admin._theme>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Usuários</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dash.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Usuários</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Editar Usuário</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="first_name"
                                    value="{{ $user->first_name }}" placeholder="Digite seu nome">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Sobrenome</label>
                                <input type="text" class="form-control" name="last_name"
                                    value="{{ $user->last_name }}" placeholder="Digite seu sobrenome">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Setor</label>
                                <select name="sector_id" class="form-control">
                                    <option selected disabled value="">Selecionar</option>
                                    @if ($sectors)
                                    @php
                                        $sectorId = $user->sector_id;
                                        $selected = function ($value) use ($sectorId)
                                        {
                                            return ($sectorId == $value) ? 'selected' : '';
                                        }
                                    @endphp
                                        @foreach ($sectors as $sector)
                                            <option {{ $selected($sector->id) }} value="{{ $sector->id }}">{{ $sector->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                    placeholder="Digite seu e-mail">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Senha</label>
                                <input type="password" class="form-control" name="password"
                                    placeholder="Digite sua senha">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.users.home') }}" class="btn btn-danger">Voltar</a>
                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</x-themes.admin._theme>
