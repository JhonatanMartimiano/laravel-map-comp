<x-themes.admin._theme>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <main role="main"><br>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <img src="{{ asset('storage/photos/' . auth()->user()->photo) }}" class="bi flex-shrink-0 mr-4 rounded" role="img" aria-label="Info:" width="200px">
                    <div>
                        <h4>Olá, {{ auth()->user()->first_name }}!<br>
                            Após o levantamento dos conhecimentos e atitudes realizado com todas as áreas, chegou o
                            momento de você compartilhar qual a sua opnião quanto aos assuntos abaixo:</h4>
                    </div>
                </div>

                <form action="{{ route('admin.dash.quiz') }}" method="post">
                    @csrf
                    @if ($competences)
                        @foreach ($competences as $competence)
                            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-success rounded box-shadow">
                                <div class="lh-10">
                                    <i class="fa-solid fa-building-columns"></i>
                                    <h5 class="mb-0 text-white lh-100">{{ $competence->title }}:</h5>
                                </div>
                            </div>

                            <div class="my-3 p-3 bg-white rounded box-shadow">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col text-center">
                                        <strong>Domino e Sei Ensinar</strong>
                                    </div>
                                    <div class="col text-center"><strong>Domino</strong></div>
                                    <div class="col text-center">
                                        <strong>Domino Parcialmente</strong>
                                    </div>
                                    <div class="col text-center"><strong>Não Domino</strong></div>
                                </div>
                                <br />

                                @if ($competence->questions())
                                    @foreach ($competence->questions() as $question)
                                        <div class="row">
                                            <div class="col"><strong>{{ $question->question }}</strong></div>
                                            <div class="col">
                                                <div class="form-check text-center">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $question->id }}" value="1" />
                                                    <label class="form-check-label"> </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check text-center">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $question->id }}" value="2" />
                                                    <label class="form-check-label"> </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check text-center">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $question->id }}" value="3" />
                                                    <label class="form-check-label"> </label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check text-center">
                                                    <input class="form-check-input" type="radio"
                                                        name="{{ $question->id }}" value="4" />
                                                    <label class="form-check-label"> </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <br />
                            </div>
                            <br /><br />
                        @endforeach
                    @endif
                    <input type="submit" class="btn btn-success" value="Cadastrar Professor" />
                </form>
            </main>
        </div>
    </section>
</x-themes.admin._theme>
