<x-app-layout>
    <section class="widget-blog-listing">
        <div class="properties">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-sm-6">
                    <x-post-item :post="$post"></x-post-item>
                </div>
                @endforeach
            </div>
            <nav class="text-center">
                {{ $posts->onEachSide(2)->links() }}
            </nav>
        </div>
    </section>
</x-app-layout>

