@props([
    'name' => 'required'
])
@error($name)
<div class="bg-red-50 border-r-4 text-background border-red-500 p-4 mb-6">

    {{ $message }}

</div>

@enderror
