<x-app-layout>
    <div class="col-md-9">
        <section class="widget widget-overflow wide-p">
            <div class="box-overflow-container box-container">
                <div class="box-container-title">
                    <h2 class="title">{{ $post->title }}</h2>
                </div> <!-- /. content-header -->
                <div class="post">
                    <img src="{{ $post->startsWith() ? $post->startsWith() : 'assets/img/placeholders/1700x1200.png'}}" alt="" class="thumbnail" />
                    <div class="post-date">
                        <p>Опубликовано: {{ $post->getFormatDate() }}</p>
                    </div>
                    <hr class="post-hr">
                    <p class="post-description">{{ strip_tags(str_replace('&nbsp;', '', $post->description)) }}</p>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3">
        <x-sidebar />
    </div>
</x-app-layout>
