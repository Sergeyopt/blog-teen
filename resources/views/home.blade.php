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
                <ul class="pagination">
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
    </section>
</x-app-layout>

