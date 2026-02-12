<x-layout>

    <x-form title="Log in " description="Glad to have you back">
        <form action="/login" method="POST" class="space-y-6">
            @csrf


            <x-form.field label="Email" name="email" error="email" type="email" value="{{old('email')}}"/>
            <x-form.field label="password" name="password" error="password" type="password" value="{{old('password')}}"/>



            <button type="submit"  class="btn w-full" data-test="login-button">Create</button>


        </form>

    </x-form>

</x-layout>

