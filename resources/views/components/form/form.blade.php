
@props(['title' , 'description'])
{{-- Register an account --}}
{{--Start tracking Your ideas Today --}}

<div class="flex justify-center mt-16">
    <div class="w-full max-w-md  rounded-lg shadow-md p-8 text-foreground">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold "> {{$title}} </h2>
            <p class="mt-2"> {{$description}} </p>
        </div>

        <div>
        {{$slot }}

        </div>


    </div>

</div>
