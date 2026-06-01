@auth
    <div class="w-full h-content bg-blue-400 text-white">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="hover:bg-blue-500 border border-blue-400 cursor-pointer p-[2px]">
                Se déconnecter
            </button>
        </form>
    </div>
@endauth
@guest
    Api Laravel Test
@endguest
