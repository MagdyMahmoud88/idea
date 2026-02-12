
@props(['label' , 'name' , 'error' , 'type' => 'text' , 'value'])

<div>
    <label class="block text-sm font-medium  mb-1">{{$label}}</label>
    <input type={{$type}} name={{$name}} value="{{$value}}"
        {{$attributes->merge(['class'=>"w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition duration-200"])}}>
    <x-form.error  name={{$error}} />
</div>
