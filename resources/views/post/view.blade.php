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
            <div class="navigation-post">
                @if($prev)
                    <div class="navigation-prev">
                        <a class="nav-link--prev" href="{{ route('view', $prev) }}">
                            <h3>&#10229; Previous</h3>
                            <p>{{ Str::words($prev->title, 25) }}</p>
                        </a>
                    </div>
                @endif
                @if($next)    
                    <div class="navigation-next">
                        <a class="nav-link--next" href="{{ route('view', $next) }}">
                            <h3 class="nav-next-title">Next &#10230;</h3>
                            <p>{{ Str::words($next->title, 10, '...') }}</p>
                        </a>
                    </div>
                @endif
            </div>
        </section>
        
    </div>
    <div class="col-md-3">
        <x-sidebar />
    </div>
</x-app-layout>
