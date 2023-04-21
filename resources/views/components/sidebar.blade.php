<div class="widget widget-menu-right">
    <div id="menu-right">
        <div class="list-group panel text-color-primary border-color-primary">
            @foreach ($categories as $category)
                <a class="list-group-item" href="{{ route('by-category', $category) }}">{{ $category->title }} <strong>(</strong>{{ $category->total }}<strong>)</strong></a>
            @endforeach
        </div>
    </div>
</div><!-- /.widget-search-->

<div class="panel">
    <div class="sidebar-title">
        <h1 class="sidebar-title--header">
            {{ \App\Models\TextModel::getTitle('about-us-sidebar') }}
        </h1>
        <div class="sidebar-description">
            <p>{!! \App\Models\TextModel::getContent('about-us-sidebar') !!}</p>
        </div>
        <a href="#!" class="btn btn-primary w-full">
            Go to about me
        </a>
    </div>
</div>
