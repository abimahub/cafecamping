<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest from <span class="text-green-500">CafeCamping</span>
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative lg:inline-flex bg-green-500 text-white rounded-xl">
            <x-category-dropdown />
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-green-500 text-white rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-white font-semibold text-sm"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>
