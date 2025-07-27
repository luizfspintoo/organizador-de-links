@props(["type" => "submit"])

<button type="{{$type}}" {{$attributes->merge(["class" => "bg-[#ED712E] font-semibold py-2 px-6 rounded-full text-[#0A0908] cursor-pointer"])}}>
    {{$slot}}
</button>