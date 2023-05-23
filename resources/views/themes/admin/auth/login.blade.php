<x-themes.admin._login>
    <p class="login-box-msg">Faça login para iniciar sua sessão</p>
    <form action="{{ route('admin.login.auth') }}" method="POST">
        @csrf
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
        <div class="row">
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <p class="mb-0">
        <a href="{{ route('admin.register') }}" class="text-center">Cadastre-se</a>
    </p>
</x-themes.admin._login>
