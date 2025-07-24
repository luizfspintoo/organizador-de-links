@if($message = session()->get("message"))
<div>{{ $message }}</div>
@endif

<div>
    <div>LOGO</div>
    <form action="{{ route('register')}}" method="POST">
        @csrf
        <h1>Criar Conta</h1>
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" placeholder="Luiz" value="{{ old('name') }}">
            <p style="color: red;">
                @error('name')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div>
            <label for="surname">Sobrenome</label>
            <input type="text" name="surname" id="surname" placeholder="Silva" value="{{ old('surname') }}">
            <p style="color: red;">
                @error('surname')
                {{ $message }}
                @enderror
            </p>
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="luizsilva@gmail.com" value="{{ old('email') }}">
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
            <button type="submit">Criar Conta</button>
        </div>
    </form>

    <div>Já tem cadastro? <a href="{{ route('login') }}">Acessar conta</a></div>
</div>