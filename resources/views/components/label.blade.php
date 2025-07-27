@props(["for"])
<label for="{{$for}}" {{$attributes->merge(["class" => "block text-sm font-semibold"])}}>
    {{$slot}}
</label>