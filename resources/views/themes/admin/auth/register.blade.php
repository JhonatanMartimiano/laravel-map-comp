<x-themes.admin._login>
    <p class="login-box-msg">Cadastrar uma nova conta</p>
    <form action="{{ route('admin.register.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="first_name" placeholder="Nome">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="last_name" placeholder="Sobrenome">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="E-mail">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Senha">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <select name="sector_id" class="form-control">
                <option selected disabled value="">Selecionar</option>
                @if ($sectors)
                    @foreach ($sectors as $sector)
                        <option value="{{ $sector->id }}">{{ $sector->title }}</option>
                    @endforeach
                @endif
            </select>            
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <p>Já possui conta? <a href="{{ route('admin.login') }}" class="text-center">Entrar</a></p>
</x-themes.admin._login>
