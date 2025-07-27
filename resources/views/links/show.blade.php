<x-layout.app>
    <div class="h-screen w-screen pt-6">
        <div class="mb-12 flex justify-center">
        </x-logo>
        </div>
        <section class="max-w-screen-sm mx-auto">
            <x-form action="{{ route('links.edit', $link) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <h1 class="text-2xl font-bold mb-6">
                    Editar Link
                    <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                </h1>

                <div class="mb-4">
                    <x-label for="title">Titulo</x-label>
                    <x-input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
                    <x-input
                        type="text"
                        name="title"
                        placeholder="Informe o titulo"
                        value="{{ old('title', $link->title) }}"
                    />
                </div>

                <div class="mb-4">
                    <x-label for="platform">Plataforma</x-label>
                    <x-input
                        type="text"
                        name="platform"
                        placeholder="Onde está assitindo?"
                        value="{{ old('platform', $link->platform) }}"
                    />
                </div>

                <div class="mb-4">
                    <x-label for="link">link</x-label>
                    <x-input
                        name="link"
                        placeholder="Digite ou cole a URL"
                        value="{{ old('link', $link->link) }}"
                    />
                </div>

                <div class="mb-6 flex gap-8 items-center">
                    <img class="w-20 rounded-lg" src="/storage/{{$link->image}}" alt="Imagem do Link">
                    <x-input type="file" name="image" value="{{ $link->image }}" />
                </div>

                <div class="text-right space-x-3">
                    <a href="{{ route('dashboard') }}"
                        class="font-semibold py-2 px-6 rounded-full text-white cursor-pointer border border-zinc-700">
                        Voltar
                    </a>
                    <x-button-primary type="submit">
                        Atualizar
                    </x-button-primary>
                </div>
            </x-form>
        </section>
    </div>
</x-layout.app>