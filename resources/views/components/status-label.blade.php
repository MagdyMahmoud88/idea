@props(['status'=>'pending'])
@php
    $classes="inline-block rounded-full border px-2 py-1 text-xs font-medium ";

    if ($status === 'pending'){
        $classes .=" bg-yellow-500/10 text-yellow-500 border-b-yellow-500/200";
    }
    if ($status === 'in_progress'){
        $classes .=" bg-blue-500/10 text-blue-500 border-b-blue-500/200";
    }
    if ($status === 'completed'){
        $classes .=" bg-green-500/10 text-green-500 border-b-green-500/200";
    }
@endphp

<span {{$attributes(['class'=> $classes])}} >

    {{$slot}}

</span>







{{--@props(['status' => 'pending'])--}}

{{--@php--}}
{{--    // استخدام match بدلاً من if المتكررة--}}
{{--    $statusClasses = match ($status) {--}}
{{--        'pending'     => 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20',--}}
{{--        'in_progress' => 'bg-blue-500/10 text-blue-500 border-blue-500/20',--}}
{{--        'completed'   => 'bg-green-500/10 text-green-500 border-green-500/20',--}}
{{--        default       => 'bg-gray-500/10 text-gray-500 border-gray-500/20',--}}
{{--    };--}}

{{--    $baseClasses = "inline-block rounded-full border px-2 py-1 text-xs font-medium";--}}
{{--@endphp--}}

{{--<span {{ $attributes->merge(['class' => "{$baseClasses} {$statusClasses}"]) }}>--}}
{{--    {{ $slot }}--}}
{{--</span>--}}

