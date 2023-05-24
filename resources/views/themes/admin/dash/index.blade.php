<x-themes.admin._theme>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <main role="main"><br>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <img src="{{ asset('storage/photos/' . auth()->user()->photo) }}"
                        class="bi flex-shrink-0 mr-4 rounded" role="img" aria-label="Info:" width="200px">
                    <div>
                        <h4>Olá, {{ auth()->user()->first_name }}!<br>
                            Após o levantamento dos conhecimentos e atitudes realizado com todas as áreas, chegou o
                            momento de você compartilhar qual a sua opnião quanto aos assuntos abaixo:</h4>
                    </div>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#general"
                            type="button" role="tab" aria-controls="general" aria-selected="true">Geral</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#sector" type="button"
                            role="tab" aria-controls="sector" aria-selected="false">Setor</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <main role="main"><br>
                            <form action="{{ route('admin.dash.general') }}" method="post">
                                @csrf
                                <div class="d-flex align-items-center p-3 text-white-50 bg-success rounded box-shadow">
                                    <div class="lh-10">
                                        <i class="fa-solid fa-building-columns"></i>
                                        <h5 class="mb-0 text-white lh-100">1 - informe o seu grau de domínioreferente
                                            aos
                                            seguintes CONHECIMENTOS e HABILIDADES:</h5>
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

                                    <div class="row">
                                        <div class="col"><strong>Google Workspace</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    value="option1" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    value="option1" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    value="option1" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    value="option1" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Sistema SUITE</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios2"
                                                    value="option2" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios2"
                                                    value="option2" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios2"
                                                    value="option2" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios2"
                                                    value="option2" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>LGPD</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios3"
                                                    value="option3" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios3"
                                                    value="option3" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios3"
                                                    value="option3" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios3"
                                                    value="option3" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Identidade e Estrutura Organizacional da EGPCE</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios4"
                                                    value="option4" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios4"
                                                    value="option4" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios4"
                                                    value="option4" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios4"
                                                    value="option4" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Atendimento ao Cliente (curso)</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios5"
                                                    value="option5" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios5"
                                                    value="option5" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios5"
                                                    value="option5" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios5"
                                                    value="option5" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Inteligência Emocional (curso)</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios6"
                                                    value="option6" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios6"
                                                    value="option6" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios6"
                                                    value="option6" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios6"
                                                    value="option6" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Comunicação Não Violenta</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios7"
                                                    value="option7" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios7"
                                                    value="option7" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios7"
                                                    value="option7" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios7"
                                                    value="option7" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Gestão do Tempo</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios8"
                                                    value="option8" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios8"
                                                    value="option8" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios8"
                                                    value="option8" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios8"
                                                    value="option8" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Estrutura Organizacional do Estado</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios9"
                                                    value="option9" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios9"
                                                    value="option9" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios9"
                                                    value="option9" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios9"
                                                    value="option9" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Informática básica</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios10"
                                                    value="option10" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios10"
                                                    value="option10" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios10"
                                                    value="option10" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios10"
                                                    value="option10" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Elaboração deTermo de Referência</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios11"
                                                    value="option11" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios11"
                                                    value="option11" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios11"
                                                    value="option11" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios11"
                                                    value="option11" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Gestão Pública - Estatuto dos Servidores - Direitos e deveres do
                                                servidor público</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios12"
                                                    value="option12" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios12"
                                                    value="option12" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios12"
                                                    value="option12" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios12"
                                                    value="option12" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Ética no serviço público</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios13"
                                                    value="option13" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios13"
                                                    value="option13" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios13"
                                                    value="option13" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios13"
                                                    value="option13" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Redação oficial</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios14"
                                                    value="option14" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios14"
                                                    value="option14" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios14"
                                                    value="option14" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios14"
                                                    value="option14" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Programas de criação de planilha, editor de texto e apresentações
                                                de slides</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios15"
                                                    value="option15" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios15"
                                                    value="option15" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios15"
                                                    value="option15" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios15"
                                                    value="option15" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Desenvolvimento de equipes / Trabalho em equipe</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios16"
                                                    value="option16" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios16"
                                                    value="option16" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios16"
                                                    value="option16" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios16"
                                                    value="option16" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Gerenciamento de processos</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios17"
                                                    value="option17" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios17"
                                                    value="option17" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios17"
                                                    value="option17" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios17"
                                                    value="option17" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Administração Pública</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios18"
                                                    value="option18" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios18"
                                                    value="option18" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios18"
                                                    value="option18" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios18"
                                                    value="option18" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Comunicação eficiente</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios19"
                                                    value="option19" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios19"
                                                    value="option19" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios19"
                                                    value="option19" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios19"
                                                    value="option19" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Gestão de conflitos</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios20"
                                                    value="option20" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios20"
                                                    value="option20" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios20"
                                                    value="option20" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios20"
                                                    value="option20" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Inclusão, acessibilidade e diversidade / Atendimento ao cliente
                                                com deficiência</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios21"
                                                    value="option21" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios21"
                                                    value="option21" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios21"
                                                    value="option21" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios21"
                                                    value="option21" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Ouvidoria</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios22"
                                                    value="option22" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios22"
                                                    value="option22" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios22"
                                                    value="option22" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios22"
                                                    value="option22" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Soluções onlines</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios23"
                                                    value="option23" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios23"
                                                    value="option23" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios23"
                                                    value="option23" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios23"
                                                    value="option23" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Uso da internet geral e da escola</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios24"
                                                    value="option24" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios24"
                                                    value="option24" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios24"
                                                    value="option24" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios24"
                                                    value="option24" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Gerencimento de projetos</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios25"
                                                    value="option25" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios25"
                                                    value="option25" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios25"
                                                    value="option25" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios25"
                                                    value="option25" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Nova lei de licitações</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios26"
                                                    value="option26" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios26"
                                                    value="option26" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios26"
                                                    value="option26" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios26"
                                                    value="option26" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Formação de líderes</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios27"
                                                    value="option27" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios27"
                                                    value="option27" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios27"
                                                    value="option27" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios27"
                                                    value="option27" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Linguagem Simples</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios28"
                                                    value="option28" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios28"
                                                    value="option28" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios28"
                                                    value="option28" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios28"
                                                    value="option28" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                </div>
                                <br /><br />
                                <!-- Fim conhecimento e Habilidades -->

                                <!-- Início atitudes -->
                                <div
                                    class="d-flex align-items-center p-3 my-3 text-white-50 bg-warning rounded box-shadow">
                                    <!-- <img class="mr-3" src="https://getbootstrap.com/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48"> -->
                                    <div class="lh-10">
                                        <i class="fa-solid fa-building-columns"></i>
                                        <h5 class="mb-0 text-white lh-100">2 - Informe com qual frequência você aplica
                                            as
                                            seguintes atitudes no ambiente corporativo:</h5>
                                    </div>
                                </div>

                                <div class="my-3 p-3 bg-white rounded box-shadow">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col text-center">
                                            <strong>Frequente</strong>
                                        </div>
                                        <div class="col text-center"><strong>Ocasionalmente</strong></div>
                                        <div class="col text-center">
                                            <strong>Raramente</strong>
                                        </div>
                                        <div class="col text-center"><strong>Nunca</strong></div>
                                    </div>
                                    <br />


                                    <div class="row">
                                        <div class="col"><strong>Proatividade</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios501"
                                                    value="option501" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios501"
                                                    value="option501" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios501"
                                                    value="option501" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios501"
                                                    value="option501" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Cooperação</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios502"
                                                    value="option502" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios502"
                                                    value="option502" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios502"
                                                    value="option502" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios502"
                                                    value="option502" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Postura Ética</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios503"
                                                    value="option503" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios503"
                                                    value="option503" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios503"
                                                    value="option503" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios503"
                                                    value="option503" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Transparência</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios504" value="option504" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios504" value="option504" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios504" value="option504" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios504" value="option504" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Empatia</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios505" value="option505" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios505" value="option505" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios505" value="option505" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios505" value="option505" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Confiabilidade</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios506" value="option506" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios506" value="option506" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios506" value="option506" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios506" value="option506" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Responsabilidade</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios507" value="option507" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios507" value="option507" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios507" value="option507" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios507" value="option507" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Pontualidade</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios508" value="option508" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios508" value="option508" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios508" value="option508" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios508" value="option508" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Respeito</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios8"
                                                    value="option8" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios8"
                                                    value="option8" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios8"
                                                    value="option8" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio" name="gridRadios8"
                                                    value="option8" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Objetividade</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios509" value="option509" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios509" value="option509" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios509" value="option509" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios509" value="option509" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Disponibilidade</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios511" value="option511" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios511" value="option511" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios511" value="option511" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios511" value="option511" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>
                                                Agilidade</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios512" value="option512" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios512" value="option512" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios512" value="option512" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios512" value="option512" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Comunicação Assertiva</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios513" value="option513" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios513" value="option513" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios513" value="option513" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios513" value="option513" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Engajamento</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios514" value="option514" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios514" value="option514" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios514" value="option514" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios514" value="option514" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Criticidade</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios516" value="option516" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios516" value="option516" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios516" value="option516" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios516" value="option516" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Inovação</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios517" value="option517" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios517" value="option517" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios517" value="option517" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios517" value="option517" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Paciência</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios518" value="option518" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios518" value="option518" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios518" value="option518" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios518" value="option518" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Inovação</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios515" value="option515" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios515" value="option515" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios515" value="option515" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios515" value="option515" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Aberta a aprendizado</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios519" value="option519" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios519" value="option519" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios519" value="option519" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios519" value="option519" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Educação</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios520" value="option520" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios520" value="option520" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios520" value="option520" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios520" value="option520" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Integridade</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios521" value="option521" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios521" value="option521" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios521" value="option521" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios521" value="option521" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Escuta ativa</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios522" value="option522" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios522" value="option522" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios522" value="option522" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios522" value="option522" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Sociabilidade</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios523" value="option523" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios523" value="option523" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios523" value="option523" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios523" value="option523" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col">
                                            <strong>Bom humor</strong>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios524" value="option524" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios524" value="option524" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios524" value="option524" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios524" value="option524" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Gentileza</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios525" value="option525" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios525" value="option525" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios525" value="option525" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios525" value="option525" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Flexibilidade</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios526" value="option526" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios526" value="option526" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios526" value="option526" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios526" value="option526" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Negociação</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios527" value="option527" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios527" value="option527" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios527" value="option527" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios527" value="option527" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Gestão de Conflitos</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios528" value="option528" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios528" value="option528" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios528" value="option528" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios528" value="option528" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="col"><strong>Eficácia</strong></div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios529" value="option529" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios529" value="option529" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios529" value="option529" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-check text-center">
                                                <input class="form-check-input" type="radio"
                                                    name="gridRadios528" value="option528" />
                                                <label class="form-check-label"> </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fim conhecimento e Habilidades -->
                                <input type="submit" class="btn btn-success" value="Cadastrar" />
                            </form>
                        </main>
                    </div>
                    <div class="tab-pane fade" id="sector" role="tabpanel" aria-labelledby="sector-tab">
                        <form action="{{ route('admin.dash.sector') }}" method="post">
                            @csrf
                            @if ($competences)
                                @foreach ($competences as $competence)
                                    <div
                                        class="d-flex align-items-center p-3 my-3 text-white-50 bg-success rounded box-shadow">
                                        <div class="lh-10">
                                            <i class="fa-solid fa-building-columns"></i>
                                            <h5 class="mb-0 text-white lh-100">{{ $competence->title }}:</h5>
                                        </div>
                                    </div>

                                    <div class="my-3 p-3 bg-white rounded box-shadow">
                                        <div class="row">
                                            <div class="col"></div>
                                            @if ($competence->id == 1)
                                                <div class="col text-center"><strong>Domino e Sei Ensinar</strong>
                                                </div>
                                            @else
                                                <div class="col text-center"><strong>Frequente</strong></div>
                                            @endif
                                            @if ($competence->id == 1)
                                                <div class="col text-center"><strong>Domino</strong></div>
                                            @else
                                                <div class="col text-center"><strong>Ocasionalmente</strong></div>
                                            @endif
                                            @if ($competence->id == 1)
                                                <div class="col text-center"><strong>Domino Parcialmente</strong>
                                                </div>
                                            @else
                                                <div class="col text-center"><strong>Raramente</strong></div>
                                            @endif
                                            @if ($competence->id == 1)
                                                <div class="col text-center"><strong>Não Domino</strong></div>
                                            @else
                                                <div class="col text-center"><strong>Nunca</strong></div>
                                            @endif
                                        </div>
                                        <br />

                                        @if ($competence->questions())
                                            @foreach ($competence->questions() as $question)
                                                <div class="row">
                                                    <div class="col"><strong>{{ $question->question }}</strong>
                                                    </div>
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
                            <input type="submit" class="btn btn-success" value="Cadastrar" />
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </section>
</x-themes.admin._theme>
