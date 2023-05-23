<x-themes.admin._theme>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contatos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dash.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Contatos</li>
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
                        <h3 class="card-title">Contatos</h3>
                        <a href="{{ route('admin.contacts.create') }}" class="btn btn-success">Adicionar Contato</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Assunto</th>
                                <th>E-mail</th>
                                <th>Cadastrado</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($contacts)
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('admin.contacts.edit', $contact->id) }}"
                                                    class="btn btn-info mr-1">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger"
                                                    data-post="{{ route('admin.contacts.destroy', $contact->id) }}"
                                                    data-toggle="modal" data-target="#data-destroy"
                                                    data-confirm="ATENÇÃO: Tem certeza que deseja excluir o contato e todos os dados relacionados a ele? Essa ação
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
                                <th>Nome</th>
                                <th>Assunto</th>
                                <th>E-mail</th>
                                <th>Cadastrado</th>
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
