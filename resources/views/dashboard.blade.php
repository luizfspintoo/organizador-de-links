@if($message = session()->get("message"))
<div>{{ $message }}</div>
@endif

@if($message = session()->get("success"))
<div style="color: green;">{{ $message }}</div>
@endif


<form action="{{ route('links.create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Título do link</label>
        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
        <input type="text" name="title" id="title" placeholder="Digite o nome do conteúdo" value="{{old('title')}}">
          <p style="color: red;">
                @error('title')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
        <label for="plataform">Plataforma de Streaming</label>
        <input type="text" name="platform" id="pltaform" placeholder="Onde está assistindo?" value="{{old('platform')}}">
          <p style="color: red;">
                @error('platform')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
        <label for="link">URL</label>
        <input type="text" name="link" id="link" placeholder="Cole a URL do conteúdo" value="{{old('link')}}">
          <p style="color: red;">
                @error('link')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
        <input type="file" name="image" id="image" accept="image/*">
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>

<div>
    <ul>
        @foreach($user->links as $link)
        <a href="{{ route('links.edit', $link) }}">
            <li>
                {{ $link->title }}
                <img src="/storage/{{$link->image}}" width="50">
                <form action="{{route('links.destroy', $link)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        </a>
        @endforeach
    </ul>
</div>


<nav>
    <a href="/dashboard">Dashboard</a>
    <a href="/profile">Profile</a>
    <a href="/logout">Sair</a>
</nav>