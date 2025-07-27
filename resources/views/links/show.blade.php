<x-layout.app>
    <div class="h-screen w-screen pt-6">
        <div class="mb-12 flex justify-center">
            <img src="/images_app/logo.png" alt="Logo">
        </div>
        <section class="max-w-screen-sm mx-auto">
            <form class="space-y-3" action="{{ route('links.edit', $link) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h1 class="text-2xl font-bold mb-6">
                    Editar Link
                    <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                </h1>

                <div>
                    <label for="title" class="block text-sm font-semibold">Titulo</label>
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <input type="text" name="title" placeholder="Digite o titulo"
                        class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700"
                        value="{{$link->title, old('title')}}">
                    <p class="text-red-500 text-sm mt-1">
                        @error('title') {{ $message }} @enderror
                    </p>
                </div>

                <div>
                    <label for="platform" class="block text-sm font-semibold">Plataforma</label>
                    <input type="text" name="platform" placeholder="Onde está assistindo?"
                        class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700"
                        value="{{ $link->platform, old('platform')}}">
                    <p class="text-red-500 text-sm mt-1">
                        @error('platform') {{ $message }} @enderror
                    </p>
                </div>

                <div>
                    <label for="link" class="block text-sm font-semibold">URL</label>
                    <input type="text" name="link" placeholder="Digite o link ou cole se desejado"
                        class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700"
                        value="{{ $link->link, old('link')}}">
                    <p class="text-red-500 text-sm mt-1">
                        @error('link') {{ $message }} @enderror
                    </p>
                </div>


                <div>
                    <label for="image" class="block text-sm font-semibold mt-2 mb-4">Imagem Link</label>
                    <div class="flex gap-8 items-center">
                        <img class="w-20 rounded-lg" src="/storage/{{$link->image}}" alt="Imagem do Link">
                        <input type="file" name="image" class="file-input file-input-ghost"
                            value="{{ $link->image }}" />
                    </div>
                </div>
                <div class="text-right space-x-3">
                    <a href="{{route('dashboard')}}"
                        class="font-semibold py-2 px-6 rounded-full text-white cursor-pointer border border-zinc-700">
                        Voltar
                    </a>
                    <button type="submit"
                        class="bg-[#ED712E] font-semibold py-2 px-6 rounded-full text-[#0A0908] cursor-pointer">
                        Atualizar
                    </button>
                </div>
            </form>
        </section>
    </div>
</x-layout.app>