<x-layout>

<x-form title="Register an account" description="Start tracking Your ideas Today">
    <form action="/register" method="POST" class="space-y-6">
        @csrf

        <x-form.field label="Name" name="name" error="name" value="{{old('name')}}"/>
        <x-form.field label="Email" name="email" error="email" type="email" value="{{old('email')}}"/>
<x-form.field label="password" name="password" error="password" type="password" value="{{old('password')}}"/>
<x-form.field label="Confirm Password" name="password_confirmation" error="password_confirmation" type="password"  value="{{old('password_confirmation')}}"/>



        <button type="submit" class="btn w-full" data-test="register-button">Create
        </button>


    </form>

</x-form>

</x-layout>

