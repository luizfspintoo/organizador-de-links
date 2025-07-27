@if($message = session()->get("message"))
<div>{{ $message }}</div>
@endif

@if($errors->any())
<script>
document.addEventListener("DOMContentLoaded", function() {
    const myModal = document.getElementById("my_modal_3");
    myModal.showModal();
});
</script>
@endif

@if($message = session()->get("success"))
<div style="color: green;">{{ $message }}</div>
@endif

<style>
.scrollbox::-webkit-scrollbar {
    width: 7px;
}
</style>

<x-layout.app>
    <div class="h-screen w-screen pt-6">
        <div class="mb-12 flex justify-center">
            <img src="/images_app/logo.png" alt="Logo">
        </div>
        <section class="max-w-screen-lg mx-auto h-100">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold">
                    Links
                    <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                </h2>
                <button onclick="my_modal_3.showModal()" type="submit"
                    class="flex items-center gap-2 bg-[#110F0E] font-semibold py-3 px-6 rounded-full text-[#ED712E] cursor-pointer">
                    <img src="/images_app/icon-add.png" alt="Icone de adicionar link">
                    Adicionar Link
                </button>
            </div>
            <div>
                <div>
                    <div class="scrollbox max-w-screen-lg mx-auto max-h-85 overflow-y-auto mt-12 px-12">
                        @foreach($user->links as $link)
                        <div class="flex gap-8 items-center">
                            <div class="flex gap-4">
                                <form action="{{ route('links.up', $link->id) }}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button class="cursor-pointer" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                </svg>
                            </button>
                        </form>

                        <form action="{{ route('links.down', $link->id) }}" method="POST">
                            @csrf
                            @method("PATCH")
                            <button class="cursor-pointer" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                </svg>
                            </button>
                        </form>
                            </div>
                            <div class="w-full flex flex-col mt-3">
                                <div class="bg-[#110F0E] gap-4 flex justify-between items-center p-4 rounded-xl">
                                    <div class="flex">
                                        <div class="flex gap-2">
                                            <div>
                                                <img class="w-16 object-fit rounded-md" src="/storage/{{$link->image}}">
                                            </div>
                                            <div>
                                                <div>
                                                    {{ $link->title }}
                                                    <span
                                                        class="text-xs font-semibold bg-orange-400 text-black py-1 px-2 rounded-full">{{ $link->platform }}</span>
                                                </div>
                                                <!-- Str::limit (permite limitar a quantidade de caracter) -->
                                                {{ \Illuminate\Support\Str::limit($link->link, 50, '...') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-6">
                                        <form action="{{route('links.destroy', $link)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="size-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>

                                            </button>
                                        </form>
                                        <a class="space-y-4" href="{{ route('links.edit', $link) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="flex justify-center mt-4">
                        <ul class="menu menu-horizontal bg-[#110F0E] rounded-full">
                            <li>
                                <a href="{{route('dashboard')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="{{route('profile')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('logout')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <dialog id="my_modal_3" class="modal bg-[#110F0E] backdrop-blur-md">
        <div class="p-6 rounded-lg bg-[#110F0E]">
            <!-- Formulário único, com a ação de submissão -->
            <form class="bg-[#110F0E]" action="{{ route('links.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-2xl font-bold mb-6">
                    Adicionar Link
                    <div class="border-b-3 w-8 border-orange-600 pb-1"></div>
                </h1>
                <div>
                    <div class="flex gap-6">
                        <div>
                            <label for="title" class="block text-sm font-semibold">Titulo</label>
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <input type="text" name="title" placeholder="Digite o titulo" value="{{ old('title') }}"
                                class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700">
                            <p class="text-red-500 text-sm mt-1">
                                @error('title') {{ $message }} @enderror
                            </p>
                        </div>

                        <div>
                            <label for="platform" class="block text-sm font-semibold">Plataforma</label>
                            <input type="text" name="platform" placeholder="Onde está assistindo?"
                                value="{{ old('platform') }}"
                                class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700">
                            <p class="text-red-500 text-sm mt-1">
                                @error('platform') {{ $message }} @enderror
                            </p>
                        </div>
                    </div>
                    <div>
                        <label for="link" class="block text-sm font-semibold">URL</label>
                        <input type="text" name="link" placeholder="Digite o link ou cole se desejado"
                            value="{{ old('link') }}"
                            class="bg-[#110F0E] mt-1 block w-full rounded-xl px-4 py-2 border border-zinc-700">
                        <p class="text-red-500 text-sm mt-1">
                            @error('link') {{ $message }} @enderror
                        </p>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="image" class="block text-sm font-semibold mt-2">Imagem Link</label>
                        <input type="file" name="image" class="file-input file-input-ghost" />
                    </div>
                </div>
                <div class="text-right mt-3">
                    <button type="submit"
                        class="bg-[#ED712E] font-semibold py-2 px-6 rounded-full text-[#0A0908] cursor-pointer">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </dialog>


</x-layout.app>