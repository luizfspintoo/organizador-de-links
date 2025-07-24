@if($message = session()->get("message"))
<div>{{ $message }}</div>
@endif

<div>
    <div>LOGO</div>
    <form action="{{ route('login')}}" method="POST">
        @csrf
        <h1>Acessar Conta</h1>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" placeholder="Digite o email" value="{{ old('email') }}">
            <p style="color: red;">
                @error('email')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Insira sua senha">
            <p style="color: red;">
                @error('password')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div>
            <button type="submit">Acessar Conta</button>
        </div>
    </form>

    <div>Não tem cadastro? <a href="{{ route('register') }}">Criar conta</a></div>
</div>