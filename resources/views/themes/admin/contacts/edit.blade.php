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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Editar Usuário</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="name" value="{{ $contact->name }}"
                                    placeholder="Digite seu nome">
                            </div>
                            <div class="form-group col-md-4">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email" value="{{ $contact->email }}"
                                    placeholder="Digite seu e-mail">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Assunto</label>
                                <input type="text" class="form-control" name="subject"
                                    value="{{ $contact->subject }}" placeholder="Digite o assunto">
                            </div>
                            <div class="form-group col-md-12">
                                <label>Mensagem</label>
                                <textarea name="message" cols="30" rows="10" class="form-control">{{ $contact->message }}</textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.contacts.home') }}" class="btn btn-danger">Voltar</a>
                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</x-themes.admin._theme>
