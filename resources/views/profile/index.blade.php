@if($message = session()->get("success"))
<div style="color: green;">{{ $message }}</div>
@endif

<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nome</label>
        <input type="hidden" name="id" id="id" value="{{ $user->id }}">
        <input type="text" name="name" id="name" placeholder="Digite o seu nome" value="{{ $user->name, old('name') }}">
          <p style="color: red;">
                @error('name')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Informe seu e-mail" value="{{ $user->email, old('email') }}">
          <p style="color: red;">
                @error('email')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
        <label for="bio">Bio</label>
        <textarea type="text" name="bio" id="bio" placeholder="Escreva sobre você">{{$user->bio, old('bio')}}</textarea>
          <p style="color: red;">
                @error('bio')
                {{ $message }}
                @enderror
            </p>
    </div>
    <div>
        <img src="/storage/{{$user->image}}" width="50">
        <input type="file" name="image" id="image" accept="image/*">
    </div>
    <div>
        <button type="submit">Salvar</button>
        <button type="submit">Cancelar</button>
    </div>
</form>