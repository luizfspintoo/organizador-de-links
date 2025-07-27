<x-layout.app>
    @if($message = session()->get("success"))
    <div style="color: green;">{{ $message }}</div>
    @endif
    <div class="h-screen w-screen pt-6">
        <div class="mb-12 flex justify-center">
            <img src="/images_app/logo.png" alt="Logo">
        </div>
        <section class="max-w-screen-sm mx-auto">
            <form class="space-y-3" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h1 class="text-2xl font-bold mb-6">
                    Perfil
                    <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                </h1>

                <div>
                    <label for="name" class="block text-sm font-semibold">Nome</label>
                    <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                    <input type="text" name="name" placeholder="Digite seu nome"
                        class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700"
                        value="{{ $user->name, old('name') }}">
                    <p class="text-red-500 text-sm mt-1">
                        @error('name') {{ $message }} @enderror
                    </p>
                </div>

                <div>
                    <label for="email" class="block text-sm font-semibold">E-mail</label>
                    <input type="text" name="email" placeholder="Informe seu e-mail"
                        class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700"
                        value="{{ $user->email, old('email') }}">
                    <p class="text-red-500 text-sm mt-1">
                        @error('email') {{ $message }} @enderror
                    </p>
                </div>

                <div>
                    <label for="bio" class="block text-sm font-semibold">Bio</label>
                    <textarea type="text" name="bio" placeholder="Escreva sobre você"
                        class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700">{{ $user->bio, old('bio') }}</textarea>
                    <p class="text-red-500 text-sm mt-1">
                        @error('bio') {{ $message }} @enderror
                    </p>
                </div>


                <div>
                    <label for="image" class="block text-sm font-semibold mt-2 mb-4">Imagem Perfil</label>
                    <div class="flex gap-8 items-center">
                        <img class="w-20 rounded-lg" src="/storage/{{$user->image}}" alt="Imagem do Link">
                        <input type="file" name="image" class="file-input file-input-ghost"
                            value="{{ $user->image, old('image') }}" />
                    </div>
                </div>

                <div class="text-right space-x-3">
                    <a href="{{route('dashboard')}}"
                        class="font-semibold py-2 px-6 rounded-full text-white cursor-pointer border border-zinc-700">
                        Voltar
                    </a>
                    <button type="submit"
                        class="bg-[#ED712E] font-semibold py-2 px-6 rounded-full text-[#0A0908] cursor-pointer">
                        Salvar
                    </button>
                </div>
            </form>
        </section>
    </div>
</x-layout.app>