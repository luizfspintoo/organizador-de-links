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
                    <div class="scrollbox max-w-screen-lg mx-auto h-80 overflow-y-auto mt-12 px-12">
                        @if($user->links->isEmpty())
                        <div class="text-center text-zinc-500 py-10">
                            <p class="text-md">Você ainda não adicionou nenhum conteúdo para assistir.</p>
                            <p class="text-md">Clique no botão <span class="font-bold">"Adicionar Link"</span> para
                                começar a montar sua lista!</p>
                        </div>
                        @else
                        @foreach($user->links as $link)
                        <div class="flex gap-8 items-center">
                            <div class="flex gap-4">
                            </div>
                            <div class="w-full flex flex-col mt-3">
                                <div class="bg-[#110F0E] gap-4 flex justify-between items-center p-4 rounded-xl">
                                    <div class="flex">
                                        <div class="flex gap-4 items-center">
                                            <div>
                                                <img class="w-16 object-fit rounded-md" src="/storage/{{$link->image}}">
                                            </div>
                                            <div>
                                                <div>
                                                    {{ $link->title }}
                                                    <span
                                                        class="text-xs font-semibold bg-orange-400 text-black py-1 px-2 rounded-full">{{ $link->platform }}</span>
                                                </div>
                                                <p class="mt-2">
                                                    <!-- Str::limit (permite limitar a quantidade de caracter) -->
                                                    {{ \Illuminate\Support\Str::limit($link->link, 50, '...') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-6 items-center">
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
                        @endif

                    </div>

                    <x-menu />
                </div>
            </div>
        </section>
    </div>

    <x-modal-create />
    <x-message-success :user="$user" />


</x-layout.app>