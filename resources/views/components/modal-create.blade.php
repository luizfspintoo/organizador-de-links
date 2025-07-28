@if($errors->any())
<script>
document.addEventListener("DOMContentLoaded", function() {
    const myModal = document.getElementById("my_modal_3");
    myModal.showModal();
});
</script>
@endif

<dialog id="my_modal_3" class="modal bg-[#110F0E] backdrop-blur-md">
        <div class="p-6 rounded-lg bg-[#110F0E]"> 
            <x-form action="{{ route('links.create') }}" method="POST" enctype="multipart/form-data">
                <h1 class="text-2xl font-bold mb-6">
                    Criar Link
                    <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                </h1>

                <div class="flex items-center gap-3">
                    <div>
                        <x-label for="title">Titulo</x-label>
                        <x-input type="hidden" name="user_id" value="{{ auth()->user()->id }}" />
                        <x-input
                            type="text"
                            name="title"
                            placeholder="Informe o titulo"
                            value="{{ old('title') }}"
                        />
                    </div>
    
                    <div>
                        <x-label for="platform">Plataforma</x-label>
                        <x-input
                            type="text"
                            name="platform"
                            placeholder="Onde está assitindo?"
                            value="{{ old('platform') }}"
                        />
                    </div>
                </div>


                <div>
                    <x-label for="link">Link</x-label>
                    <x-input
                        name="link"
                        placeholder="Digite ou cole a URL"
                        value="{{ old('link') }}"
                    />
                </div>

                <div class="w-full mb-6">
                    <x-label for="image">Imagem do Link</x-label>
                    <x-input type="file" name="image" />
                </div>

                <div class="text-right space-x-3">
                    <a href="{{ route('dashboard') }}"
                        class="font-semibold py-2 px-6 rounded-full text-white cursor-pointer border border-zinc-700">
                        Cancelar
                    </a>
                    <x-button-primary type="submit">
                        Salvar
                    </x-button-primary>
                </div>
            </x-form>
        </div>
    </dialog>