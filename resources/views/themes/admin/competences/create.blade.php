<x-themes.admin._theme>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Competências</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dash.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Competências</li>
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
                    <h3 class="card-title">Criar Competência</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.competences.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Título</label>
                                <input type="text" class="form-control" name="title"
                                    placeholder="Digite seu título">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Setor</label>
                                <select name="sector_id" class="form-control">
                                    <option selected disabled value="">Selecionar</option>
                                    @if ($sectors)
                                        @foreach ($sectors as $sector)
                                            <option value="{{ $sector->id }}">{{ $sector->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.competences.home') }}" class="btn btn-danger">Voltar</a>
                            <button class="btn btn-success">Criar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</x-themes.admin._theme>
