@props(["name", "placeholder" => ''])
<textarea name="{{$name}}" {{ $attributes->merge(["class" => "bg-[#110F0E] border-none mt-1 block w-full rounded-xl px-4 py-2"]) }}>{{$slot}}</textarea>