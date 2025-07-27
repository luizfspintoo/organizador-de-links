<x-layout.app>
    @if($message = session()->get('success'))
        <div style="color: green;">{{ $message }}</div>
    @endif

    <div class="h-screen w-screen pt-6">
        <div class="mb-12 flex justify-center">
            <x-logo />
        </div>

        <section class="max-w-screen-sm mx-auto">
            <x-form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <h1 class="text-2xl font-bold mb-6">
                    Perfil
                    <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                </h1>

                <div class="mb-4">
                    <x-label for="name">Nome</x-label>
                    <x-input type="hidden" name="id" value="{{ $user->id }}" />
                    <x-input
                        type="text"
                        name="name"
                        placeholder="Informe seu nome"
                        value="{{ old('name', $user->name) }}"
                    />
                </div>

                <div class="mb-4">
                    <x-label for="email">Email</x-label>
                    <x-input
                        type="email"
                        name="email"
                        placeholder="Informe seu e-mail"
                        value="{{ old('email', $user->email) }}"
                    />
                </div>

                <div class="mb-4">
                    <x-label for="bio">Bio</x-label>
                    <x-textarea
                        name="bio"
                        placeholder="Escreva sobre você"
                    >{{ old('bio', $user->bio) }}</x-textarea>
                </div>

                <div class="mb-6 flex gap-8 items-center">
                    <img class="w-20 rounded-lg" src="/storage/{{ $user->image }}" alt="Imagem do Perfil">
                    <x-input type="file" name="image" />
                </div>

                <div class="text-right space-x-3">
                    <a href="{{ route('dashboard') }}"
                        class="font-semibold py-2 px-6 rounded-full text-white cursor-pointer border border-zinc-700">
                        Voltar
                    </a>
                    <x-button-primary type="submit">
                        Salvar
                    </x-button-primary>
                </div>
            </x-form>
        </section>
    </div>
</x-layout.app>
