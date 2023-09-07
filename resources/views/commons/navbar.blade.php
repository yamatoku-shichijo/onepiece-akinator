@if (Auth::check())
    <header class="mb-4">
        <nav class="navbar bg-neutral text-neutral-content">
            {{-- トップページへのリンク --}}
            <div class="flex-1">
                <h1><a class="btn btn-ghost normal-case text-xl" href="/">Quiz</a></h1>
            </div>
    
            <div class="flex-none">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <ul tabindex="0" class="menu hidden lg:menu-horizontal">
                        @include('commons.link_items')
                    </ul>
                </form>
            </div>
        </nav>
    </header>
@endif