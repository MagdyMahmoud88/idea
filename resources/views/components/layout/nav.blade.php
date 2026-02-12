<nav class="border-b border-border px-6">
<div class="max-w-7xl mx-auto h-16 flex items-center justify-between">
    <div class="">
        <a href="/">
            <img src="/images/logo.png"  width="60" height="" alt="Idea">
        </a>
    </div>
    @auth

        <form action="{{route('logout')}}" method="post">
            @csrf
    <button>Log out</button>
            </form>

    @endauth
    @guest
        <div class="flex gap-x-5 items-center">
            <a href="/login">Sign In</a>
            <a href="/register" class="btn">Register</a>
        </div>
    @endguest


</div>

</nav>
