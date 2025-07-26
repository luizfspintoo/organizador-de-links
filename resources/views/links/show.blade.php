<form action="{{ route('links.edit', $link) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Título do link</label>
        <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
        <input type="text" name="title" id="title" placeholder="Digite o nome do conteúdo" value="{{$link->title, old('title')}}">
          <p style="color: red;">
                @error('title')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
        <label for="plataform">Plataforma de Streaming</label>
        <input type="text" name="platform" id="pltaform" placeholder="Onde está assistindo?" value="{{ $link->platform, old('platform')}}">
          <p style="color: red;">
                @error('platform')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
        <label for="link">URL</label>
        <input type="text" name="link" id="link" placeholder="Cole a URL do conteúdo" value="{{$link->link, old('link')}}">
          <p style="color: red;">
                @error('link')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
         <img src="/storage/{{$link->image}}" width="50">
        <input type="file" name="image" id="image" accept="image/*" value="{{ $link->image }}">
    </div>
    <div>
        <button type="submit">Salvar</button>
    </div>
</form>