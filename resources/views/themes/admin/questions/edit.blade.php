<x-themes.admin._theme>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Questões</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dash.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Questões</li>
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
                    <h3 class="card-title">Editar Competência</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.questions.update', $question->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Questão</label>
                                <input type="text" class="form-control" name="question"
                                    value="{{ $question->question }}" placeholder="Digite sua questão">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Competência</label>
                                <select name="competence_id" class="form-control">
                                    <option selected disabled value="">Selecionar</option>
                                    @if ($competences)
                                    @php
                                        $competenceId = $question->competence_id;
                                        $selected = function ($value) use ($competenceId)
                                        {
                                            return ($competenceId == $value) ? 'selected' : '';
                                        }
                                    @endphp
                                        @foreach ($competences as $competence)
                                            <option {{ $selected($competence->id) }}  value="{{ $competence->id }}">{{ $competence->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.questions.home') }}" class="btn btn-danger">Voltar</a>
                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
</x-themes.admin._theme>
