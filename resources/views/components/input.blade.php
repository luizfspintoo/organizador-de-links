@props(["type" => "text", "name", "placeholder" => ''])

<input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
    {{ $attributes->merge(["class" => "bg-[#110F0E] border-none mt-1 block w-full rounded-xl px-4 py-2"]) }}>

<p class="text-red-500 text-sm mt-1">
    @error($name) {{ $message }} @enderror
</p>
