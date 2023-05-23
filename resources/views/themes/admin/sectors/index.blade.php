<x-themes.admin._theme>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Setores</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dash.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Setores</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Setores</h3>
                        <a href="{{ route('admin.sectors.create') }}" class="btn btn-success">Adicionar Setor</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($sectors)
                                @foreach ($sectors as $sector)
                                    <tr>
                                        <td>{{ $sector->title }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('admin.sectors.edit', $sector->id) }}"
                                                    class="btn btn-info mr-1">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger"
                                                    data-post="{{ route('admin.sectors.destroy', $sector->id) }}"
                                                    data-toggle="modal" data-target="#data-destroy"
                                                    data-confirm="ATENÇÃO: Tem certeza que deseja excluir o usuário e todos os dados relacionados a ele? Essa ação
                                                    não pode ser feita!">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Título</th>
                                <th>Ações</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</x-themes.admin._theme>
