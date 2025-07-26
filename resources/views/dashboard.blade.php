@if($message = session()->get("message"))
<div>{{ $message }}</div>
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
                <button type="submit" class="flex items-center gap-2 bg-[#110F0E] font-semibold py-3 px-6 rounded-full text-[#ED712E] cursor-pointer">
                    <img src="/images_app/icon-add.png" alt="Icone de adicionar link">
                    Adicionar Link
                </button>
            </div>
            <div>
                <div>
        <div class="scrollbox max-w-screen-md mx-auto max-h-85 overflow-y-auto mt-4">
            @foreach($user->links as $link)
                <div class="flex flex-col gap-4 mt-6">
                    <div class="bg-[#110F0E] flex justify-between items-center p-4 rounded-lg">
                    <div class="flex">
                        <div class="w-40">BOTÃO</div>
                        <div class="flex gap-2">
                             <div>
                            <img src="/storage/{{$link->image}}" width="50">
                        </div>
                        <div>
                            <div>
                                {{ $link->title }}
                                {{ $link->platform }}
                            </div>
                            {{ $link->link }}
                        </div>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <form action="{{route('links.destroy', $link)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
</svg>

                            </button>
                        </form>
                         <a class="space-y-4" href="{{ route('links.edit', $link) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
  <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
</svg>

                        </a>
                    </div>
                </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-4">
            <ul class="menu menu-horizontal bg-[#110F0E] rounded-full">
  <li>
    <a>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
</svg>

    </a>
  </li>
  <li>
    <a>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>
    </a>
  </li>
  <li>
    <a>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
</svg>

    </a>
  </li>
</ul>
        </div>
    </div>
            </div>
        </section>
    </div>
</x-layout.app>