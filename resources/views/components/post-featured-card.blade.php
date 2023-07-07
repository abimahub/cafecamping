@props(['post'])

<article
    class="transition-colors duration-300 bg-green-200 hover:bg-green-100 border border-green border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            {{-- <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Blog Post illustration" class="rounded-xl"> --}}
            <img src="img/{{ asset('storage/app/public/' . $post->thumbnail) }}.jpg" onerror="this.onerror=null;this.src='/images/picture-svgrepo-com.jpg';" alt="Blog Post illustration" class="rounded"/>
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-green-500 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    {{-- <img src="/images/cafe-card-food-menu-vintage-svgrepo-com.jpg" alt="id card"> --}}
                    <img src="img/{{ asset('storage/' . $post->thumbnail) }}.jpg" onerror="this.onerror=null;this.src='/images/id-card-svgrepo-com.jpg';" alt="Blog Post illustration" class="rounded"/>
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/{{ $post->slug }}"
                       class="transition-colors duration-300 text-xs text-white font-semibold bg-green-500 hover:bg-green-200 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
